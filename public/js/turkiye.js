$(function() {
    var r = Raphael('map'),
        attributes = {
            fill: '#00394f',
            stroke: '#fff',
            'stroke-width': .5,
            'stroke-linejoin': 'round'
        },
        arr = {};

    for (var county in paths) {
        var obj = r.path(paths[county].path);
        obj.attr(attributes);
        arr[obj.id] = county;

        if (arr[obj.id] != 'blank') {
            obj.data('selected', 'notSelected');
            obj.node.id = arr[obj.id];
            obj.attr(attributes).attr({ title: paths[arr[obj.id]].name });

            // Add data-id attribute for use in the click event
            obj.node.setAttribute('data-id', paths[arr[obj.id]].id);

            obj.hover(function() {
                $('#coatOfArms').addClass(arr[this.id] + 'large sprite-largecrests');
                $('#countyInfo').text(paths[arr[this.id]].name);
            }, function() {
                $('#coatOfArms').removeClass();
            });

            obj.click(function() {
                var ilId = this.node.getAttribute('data-id'); // Get city ID from data-id
                $('#map').trigger('click', [ilId]); // Trigger a click event on the map with city ID
            });

            obj.mouseout(function() {
                if (paths[arr[this.id]].value == 'notSelected') {
                    this.animate({ fill: '#00394f' }, 300);
                }
            });

            obj.mouseover(function() {
                if (paths[arr[this.id]].value == 'notSelected') {
                    this.animate({ fill: '#C10230' }, 50);
                }
            });
        }
    }
});
