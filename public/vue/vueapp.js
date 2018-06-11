        (function($) {
            var _token = '<?php echo csrf_token() ?>';
            $(document).ready(function() {
                var app = new Vue({
                    el: '#app',
                    data: {
                        details: {
                            sub_total: 0,
                            total: 0,
                            total_quantity: 0
                        },
                        itemCount: 0,
                        items: [],
                        item: {
                            id: '',
                            name: '',
                            img: '',
                            price: 0.00,
                            qty: 1
                        }
                    },
                    mounted:function(){
                        this.loadItems();
                    },
                    methods: {
                        addItem: function() {
                            var _this = this;
                            this.$http.post('/cart',{
                                _token:_token,
                                id:_this.item.id,
                                name:_this.item.name,
                                img:_this.item.img,
                                price:_this.item.price,
                                qty:_this.item.qty
                            }).then(function(success) {
                                _this.loadItems();
                            }, function(error) {
                                console.log(error);
                            });
                        },
                        removeItem: function(id) {
                            var _this = this;
                            this.$http.delete('/cart/'+id,{
                                params: {
                                    _token:_token
                                }
                            }).then(function(success) {
                                _this.loadItems();
                            }, function(error) {
                                console.log(error);
                            });
                        },
                        loadItems: function() {
                            var _this = this;
                            this.$http.get('/cart',{
                                params: {
                                    limit:10
                                }
                            }).then(function(success) {
                                _this.items = success.body.data;
                                _this.itemCount = success.body.data.length;
                                _this.loadCartDetails();
                            }, function(error) {
                                console.log(error);
                            });
                        },
                        loadCartDetails: function() {
                            var _this = this;
                            this.$http.get('/cart/details').then(function(success) {
                                _this.details = success.body.data;
                            }, function(error) {
                                console.log(error);
                            });
                        }
                    }
                });
               
            });
        })(jQuery);