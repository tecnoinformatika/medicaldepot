<script src="https://unpkg.com/vue"></script>
<script src="https://cdn.jsdelivr.net/vue.resource/1.3.1/vue-resource.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/tether/1.4.0/js/tether.min.js" integrity="sha384-DztdAPBWPRXSA/3eYEEUWrWCy7G5KFbe8fFjk5JAIxUYHKkDx6Qin1DkWx51bBrb" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.6/js/bootstrap.min.js" integrity="sha384-vBWWzlZJ8ea9aCX4pEW3rVHjgjt7zpkNpZk+02D9phzyeVkE+jo0ieGizqPLForn" crossorigin="anonymous"></script>

<script>
    (function($) {
        var _token = '<?php echo csrf_token() ?>';
        $(document).ready(function() {
            var wishlist = new Vue({
                el: '#wishlist',
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
                        this.$http.post('/wishlist',{
                            _token:_token,
                            id:_this.item.id,
                            name:_this.item.name,
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
                        this.$http.delete('/wishlist/'+id,{
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
                        this.$http.get('/wishlist',{
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
                        this.$http.get('/wishlist/details').then(function(success) {
                            _this.details = success.body.data;
                        }, function(error) {
                            console.log(error);
                        });
                    }
                }
            });
        });
    })(jQuery);
</script>
