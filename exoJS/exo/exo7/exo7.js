function Pile() {
    this.tab = new Array();

    
    function Pile(){
        this.tab = new Array();
    
        this.push=function(elem){
            //this.tab[this.size()] = elem;
            this.tab.push(elem);
        };
    
        this.pop=function(){
            /*if(this.size() < 1 )
                throw "La pile ne possède pas d'élément";
            var elem = this.top();
            this.tab.splice(this.size()-1,1);
            return elem;*/
            return this.tab.pop();
        };
    
        this.top=function(){
           if(this.size() < 1 )
                throw "La pile est vide";
            return this.tab[this.size()-1];
        };
    
        this.size=function(){
            return this.tab.length;
        };
    
        Pile.prototype.toString=function(){
          return "Contenu de la pile : "+this.tab.join("-");
        };
    }
    
    let maPile = new Pile();
    try{
        //maPile.top();
        //maPile.pop();
        console.log("Hauteur de la pile : "+maPile.size());
        maPile.push(4);
        console.log("Hauteur de la pile : "+maPile.size());
        console.log(maPile.toString());
        maPile.push(1);
        maPile.push(3);
        console.log("Hauteur de la pile : "+maPile.size());
        console.log(maPile.toString());
        var element = maPile.top();
        console.log("L'élément en haut de la pile est : "+element);
        maPile.pop();
        console.log("Hauteur de la pile : "+maPile.size());
        console.log(maPile.toString());
        }catch (e){
        alert("Erreur :"+e);
        console.log("Erreur :"+e);
    }

    function geoFindMe() {
    
        const status = document.querySelector('#status');
        const mapLink = document.querySelector('#map-link');
    }