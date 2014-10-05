/* prefixes:
 *
 * ao - arch odessa : main application layer prefix
 */
  
var archodessa = angular.module('archodessa',[]);

function MainController($scope, $rootScope){
  $scope.currentView = 'map';
  $rootScope.$on('aoChangeView', function(event, data){
    $scope.currentView = data.currentView;
    if(!$scope.$$phase) $scope.$apply();
  })
}

function MapController($rootScope){
  var aoMap = new DG.Map('aoMap');
  // Устанавливаем центр карты, и коэффициент масштабирования:
  aoMap.setCenter(new DG.GeoPoint(30.723892,46.482853), 17);
  // Добавляем элемент управления коэффициентом масштабирования:
  aoMap.controls.add(new DG.Controls.Zoom());

  aoMap.addEventListener(aoMap.getContainerId(), 'DgClick', function(event){
    $rootScope.$broadcast('aoMapClick', {currentView:'info'});
  })

  $rootScope.$on('aoMapClick', function(event, data){
    $scope.currentView = data.currentView;
    if(!$scope.$$phase) $scope.$apply();
  })

}

function InfoController($scope, $rootScope){
  $scope.photos = [];

  $scope.buildings = [
    {   
      "id": 123,
      "name": "Лютеранская церковь Св. Павла (Кирха) и пасторский дом",
      "address": "Новосельского, 68",
      "description_ru": "На долю одного из самых значимых градостроительных объектов исторического центра Одессы — здания лютеранской церкви Св. Павла, выпала непростая судьба. Пройдя все этапы советской борьбы с «опиумом для народа», будучи не раз в шаге от обрушения и сноса, храм восстал практически из пепла.",
      "images": [
        {
          "url": "http://archodessa.com/pictures/kirche-history-36.jpg",
          "thumbnail": "http://archodessa.com/pictures/thumbs/kirche-history-22.thumb.jpg",
          "description_ru": "Кирха после пожара",
          "description_en": "Kirha after burning",
        },
        {
          "url": "http://archodessa.com/pictures/kirche-history-36.jpg",
          "thumbnail": "http://archodessa.com/pictures/thumbs/kirche-history-22.thumb.jpg",
          "description_ru": "Кирха после пожара",
          "description_en": "Kirha after burning",
        },
      ],
    }
  ]

  $scope.newphoto = '';

  $scope.goBack = function(){
    $rootScope.$broadcast('aoMapClick', {currentView:'map'});
  }

  $scope.addPhoto = function(){
    console.dir($scope.newphoto)
    var range = $scope.newphoto.split('-');
    if(range.length == 2){
      for (var i = Number(range[0]); i <= Number(range[1]); i++) {
        $scope.photos.push({
          src: "pictures/thumbs/aleksandrovskiy-prospekt-3-"+i+".thumb.jpg",
          description:"test description"
        })
      };
    } else {
      $scope.photos.push({
        src: "pictures/thumbs/aleksandrovskiy-prospekt-3-"+$scope.newphoto+".thumb.jpg",
        description:"test description"
      })
    }
  }

}

