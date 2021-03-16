const demo = new Vue({
    el: '#demo',
    data: {
        viewGeneral: true,
        viewPersonnel: false,
        viewSupprimes: false,
        viewConnexion: true
    },
    watch: {
        //currentBranch: 'fetchData'
    },
    filters: {
    },
    methods: {
       toggleGeneral: function()
       {
           this.viewGeneral=true;
           this.viewPersonnel=false;
           this.viewSupprimes=false;
       },
       togglePersonnel: function()
       {
            this.viewGeneral=false;
            this.viewPersonnel=true;
            this.viewSupprimes=false;
       },
       toggleSupprimes: function()
       {
            this.viewGeneral=false;
            this.viewPersonnel=false;
            this.viewSupprimes=true;
       },
       toggleConnexion: function()
       {
            this.viewConnexion=!this.viewConnexion;
       }
    }
})