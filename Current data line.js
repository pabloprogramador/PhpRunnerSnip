Editor

var value = ctrl.getPeer('value');
var total = ctrl.getPeer('total');
var teacher = ctrl.getPeer('teacher_value');
total.setValue(value.getValue()- this.getValue());

Linha

var category = row.getFieldValue('category');
// more: https://xlinesoft.com/phprunner/docs/about_grid_row_javascript_api.htm