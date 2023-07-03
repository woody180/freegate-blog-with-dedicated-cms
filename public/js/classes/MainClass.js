export default class MainClass {
    constructor() {
        this.elements();
        this.variables();


        this.onScroll();
    }


    elements(element) {
        const obj = {};
        obj.mainHeader = document.querySelector('#main-header');
        obj.socials = document.querySelector('#floating-share');
        
        return obj[element];
    }


    variables() {
        this.variables.headerHeight = this.elements('mainHeader').offsetHeight;
    }



    onScroll() {

        if (!this.elements('socials')) return false;

        window.addEventListener('scroll', e => {
            if (window.scrollY >= this.variables.headerHeight) {
                this.elements('socials').classList.add('fixed');
            } else {
                this.elements('socials').classList.remove('fixed');
            }
        });
    }
}