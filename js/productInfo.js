
var Merchandise = function(options){

    //Merchandise Information
    this.product_name = options.product_name;
    this.product_artist = options.product_artist;
    this.product_description = options.product_description;
    this.product_detail = options.product_detail;
    this.product_amount = options.product_amount;
    this.product_status = options.product_status;

};




Merchandise.prototype = {

    products: [],


    getMerchandise: function(products){
        this.products.push(products);
    }



};

//Merchandise.prototype.getProd().prototype = Merchandise.prototype;