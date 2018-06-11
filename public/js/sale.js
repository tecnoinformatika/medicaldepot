(function(){
    var app = angular.module('mypos', [ ]);

    app.controller("SearchItemCtrl", [ '$scope', '$http', function($scope, $http) {
        $scope.items = [ ];
        $http.get('api/items').success(function(data) {
            $scope.items = data;
        });
       $scope.saletemp = [ ];
        $scope.newsaletemp = { };
        
        function refrescar(){
            $http.get('api/saletemp').success(function(data, status, headers, config) {
            $scope.saletemp = data;
        });
        }
        
        refrescar();
        
        $scope.addSaleTemp = function(item, newsaletemp) {
            
            
            $http.get('api/queryitemcar/' + item.id).
            success(function(data, status, headers, config) {
            
                if (data == 0){
        
                    $http.post('api/saletemp', { item_id: item.id,  cost_price: item.cost_price, selling_price: item.selling_price, iva: (item.selling_price * item.iva), impoconsumo: (item.selling_price * item.impoconsumo)}).
                    success(function(data, status, headers, config) {
                        $scope.saletemp.push(data);
                            $http.get('api/saletemp').success(function(data) {
                                refrescar();
                            });
                    });
            
                }else{
                    $http.put('api/queryitemMas/'+ item.id, { item_id: item.id,  cost_price: item.cost_price, selling_price: item.selling_price}).
                    success(function(data, status, headers, config) {
                        refrescar();
                    })
                }
                
            });
            
        }
         $scope.updateSaleTemp = function(newsaletemp) {
          
            $http.put('api/saletemp/' + newsaletemp.id, { quantity: newsaletemp.quantity, 
                total_cost: newsaletemp.item.selling_price * newsaletemp.quantity, 
                total_selling: (newsaletemp.item.selling_price * newsaletemp.quantity) + (newsaletemp.iva * newsaletemp.quantity) + (newsaletemp.impoconsumo * newsaletemp.quantity) }).
            success(function(data, status, headers, config) {
                
                if (data=="error")
                {
                    swal({   title: "Oops!",   text: "La cantidad no debe exeder lo disponible.",   timer: 2000,   showConfirmButton: false,type: "error", });
                   
                     refrescar();
                }
                });
        }
        $scope.removeSaleTemp = function(id) {
            $http.delete('api/saletemp/' + id).
            success(function(data, status, headers, config) {
                $http.get('api/saletemp').success(function(data) {
                        $scope.saletemp = data;
                        });
                });
        }
       
        $scope.subtotal = function(list) {
            var subtotal=0;
            angular.forEach(list , function(newsaletemp){
                subtotal+= parseFloat(((newsaletemp.item.selling_price * newsaletemp.quantity) * newsaletemp.item.iva)  + (newsaletemp.item.selling_price * newsaletemp.quantity)) ;
            });
            return subtotal;
        }
        $scope.iva = function(list) {
            var iva=0;
            angular.forEach(list , function(newsaletemp){
                iva+= parseFloat((newsaletemp.item.selling_price * newsaletemp.quantity) * newsaletemp.item.iva );
            });
            return iva;
        }
        $scope.impoconsumo = function(list) {
            var impoconsumo=0;
            angular.forEach(list , function(newsaletemp){
                impoconsumo+= parseFloat((newsaletemp.item.selling_price * newsaletemp.quantity) * newsaletemp.item.impoconsumo );
            });
            return impoconsumo;
        }
        
        $scope.total = function(list) {
            var total=0;
            angular.forEach(list , function(newsaletemp){
                total+= parseFloat(((newsaletemp.item.selling_price * newsaletemp.quantity) * newsaletemp.item.impoconsumo) + ((newsaletemp.item.selling_price * newsaletemp.quantity) * newsaletemp.item.iva) + (newsaletemp.item.selling_price * newsaletemp.quantity) );
            });
            return total;
        }

        
     }]);
})();