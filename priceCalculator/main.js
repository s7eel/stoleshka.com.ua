$(function () {
  var inputData = {
    // woodBreed: undefined,
    // bondingType: undefined,
    // gauge: undefined,
    // glueType: undefined,
    // detailsNumber: undefined,
    // size: undefined,
    // chamferRemoving: undefined,
    // complexRadius: undefined,
    // coveringPreparation: undefined,
    // covering: undefined,
    // toningColor: undefined,
    // discount: false,
    // packaging: undefined
};

  changeCheckboxBehavior();

  $('#calculator').find('input').on('change', function (event) {
    var sums;

    inputData[event.currentTarget.name] = event.currentTarget.value;
    sums = calcSums(inputData);

    for (var key in sums) {
      if (sums.hasOwnProperty(key)) {
        $('#'+ key).html(Number(sums[key] || 0 ).toFixed());
      }
    }
  });
});


function changeCheckboxBehavior () {
  $("input:checkbox").on('click', function () {
    var $box = $(this);
    if ($box.is(":checked")) {
      var group = "input:checkbox[name='" + $box.attr("name") + "']";
      $(group).prop("checked", false);
      $box.prop("checked", true);
    } else {
      $box.prop("checked", false);
    }
  });
}