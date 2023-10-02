import SketchEngine from '../SketchEngine.js';

export default class MainClass extends SketchEngine {

    constructor() {
        super();
    }
    

    variables = {};


    execute = [];


    selectors = {
        searchContainer: '#search-line-full',
        searchClose: '#close-main-search'
    };


    html = {}


    catchDOM() {}


    bindEvents() {
        UIkit.util.on(this.selectors.searchContainer, 'shown', e => {
            setTimeout(() => {
                e.target.parentElement.querySelector('input').focus()
            }, 100);
        });

        this.lib('body').on('keydown', this.functions.closeSearch.bind(this));
        this.lib(this.selectors.searchClose).on('click', this.functions.searchClose.bind(this));
    }


    functions = {
        closeSearch(e) {
            if (e.keyCode === 27) {
                if (document.querySelector(this.selectors.searchContainer).className.includes('active')) {
                    document.querySelector(this.selectors.searchContainer).classList.remove('active');
                }
            }
        },

        searchClose(e) {
            e.preventDefault();
            document.querySelector(this.selectors.searchContainer).classList.remove('active');
        }
    }
}