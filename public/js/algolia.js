(function(){
var client = algoliasearch('O4QV5LEODL', 'ebadda241ac37d47c96e3cb39609e071');
var index = client.initIndex('products');
//initialize autocomplete on search input (ID selector must match)
autocomplete('#aa-search-input',
{ hint: false }, {
    source: autocomplete.sources.hits(index, {hitsPerPage: 5}),
    //value to be displayed in input control after user's suggestion selection
    displayKey: 'name',
    //hash of templates used when rendering dataset
    templates: {
        //'suggestion' templating function used to render a single suggestion
        suggestion: function(suggestion) {
          return '<span>' +
            suggestion._highlightResult.nom.value + '</span><span>' +
            suggestion._montant + '</span>';
        }
    }
});
})();