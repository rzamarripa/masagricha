var app = angular.module('inox', ['ui.select2']);

app.directive( [ 'focus', 'blur', 'keyup', 'keydown', 'keypress' ].reduce( function ( container, name ) {
    var directiveName = 'ng' + name[ 0 ].toUpperCase( ) + name.substr( 1 );
 
    container[ directiveName ] = [ '$parse', function ( $parse ) {
        return function ( scope, element, attr ) {
            var fn = $parse( attr[ directiveName ] );
            element.bind( name, function ( event ) {
                scope.$apply( function ( ) {
                    fn( scope, {
                        $event : event
                    } );
                } );
            } );
        };
    } ];
 
    return container;
}, { } ) );

app.value('ui.config', {
  select2: {
    formatNoMatches: function(term) {
      return 'No encontrado';
    },
    formatInputTooShort: function (term, minLength) {
        return 'Escriba mínimo ' + minLength + ' caracteres';
    },
    width: 'copy'
  }
});

app.directive('inoxicaDatePicker', ['$parse', function ($parse) {
    return {
        link: function (scope, elm, attr) {
          //var dateFormat = elm.data('date-format') ? elm.data('date-format') : 'dd M y';
          var ngModel = $parse(attr.ngModel);
            $.datepicker.regional['es'] = {
                closeText: 'Cerrar',
                prevText: '<Ant',
                nextText: 'Sig>',
                currentText: 'Hoy',
                monthNames: ['Enero', 'Febrero', 'Marzo', 'Abril', 'Mayo', 'Junio', 'Julio', 'Agosto', 'Septiembre', 'Octubre', 'Noviembre', 'Diciembre'],
                monthNamesShort: ['Ene','Feb','Mar','Abr', 'May','Jun','Jul','Ago','Sep', 'Oct','Nov','Dic'],
                dayNames: ['Domingo', 'Lunes', 'Martes', 'Miércoles', 'Jueves', 'Viernes', 'Sábado'],
                dayNamesShort: ['Dom','Lun','Mar','Mié','Juv','Vie','Sáb'],
                dayNamesMin: ['Do','Lu','Ma','Mi','Ju','Vi','Sá'],
                weekHeader: 'Sm',
                dateFormat: elm.data('inoxica-date-format') ? elm.data('inoxica-date-format') : 'yy-mm-dd',
                inoxicaDay: 1,
                isRTL: false,
                showMonthAfterYear: false,
                yearSuffix: ''};
            $.datepicker.setDefaults($.datepicker.regional['es']);
            elm.datepicker({
              //minDate: elm.data('no-min-date') ? null : new Date(),
              onSelect: function (dateText) {
                scope.$apply(function(scope){
                    ngModel.assign(scope, dateText);
                });
              }
            });
        }
    };
}]);