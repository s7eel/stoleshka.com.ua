$(function () {
  var products,
    finalSum,
    dictionary,
    $productsList = $('#productsList'),
    order,
    $orderForm = $('#orderForm');

  dictionary = {
    tabletop: 'столешница',
    steps: 'ступени',
    windowsill: 'подоконник',
    frontFacade: 'фасад прямой',
    furnitureBoard: 'мебельный щит',
    ash: 'ясень',
    oak: 'дуб'
  };

  $('#basket').on('basket:update', updateData);

  updateData();

  $('#makeOrder').on('click', function () {
    getDataFromLS();
    order = {
      products: products,
      finalSum: finalSum,
      client: getDataFromForm()
    };

    $.ajax({
      url: '/index.php?page=getDataCalc',
      type: 'post',
      dataType: 'json',
      data: JSON.stringify(order),
      success: function (data) {
        resetForm();
      },
      error: function (e) {
      }
    });
  });

  function updateData () {
    getDataFromLS();
    products && products.length? renderProducts(): renderEmptyMsg();
  }

  function renderProducts () {
    $productsList.empty();
    $productsList.off('click', '.glyphicon-remove');

    products.forEach(function (product, key) {
      $('#productsList').append('<li>' +
        '<span class="itemName">' + dictionary[product.itemName] + '</span>' +
        '<span class="woodBreed">' + dictionary[product.woodBreed] + '</span>' +
        '<span class="options">' + product.length + 'x' + product.width + '</span>' +
        '<span class="productNumber">' + product.detailsNumber + '</span>' +
        '<span class="totalWithDiscount">' + product.totalWithDiscount + '</span>' +
        '<span class="glyphicon glyphicon-remove" data-key="' + key + '"></span>' +
        '</li>');
    });

    $productsList.on('click', '.glyphicon-remove', function (e) {
      products.splice(e.target.dataset.key, 1);
      localStorage.setItem('products', JSON.stringify(products));
      updateData();
    })
  }

  function getDataFromLS () {
    products = JSON.parse(localStorage.getItem('products'));
    finalSum = localStorage.getItem('finalSum');
  }

  function renderEmptyMsg () {
    $('#productsList').html('Корзина пуста');
  }

  function resetForm () {
    $orderForm[0].reset();
  }

  function getDataFromForm () {
    var data = {};
    $orderForm.serializeArray().map(function (item) {
      return data[item.name] = item.value;
    });

    return data;
  }
});


var a = {
  "products": [{
    "itemName": "steps",
    "woodBreed": "ash",
    "bondingType": "glued",
    "gauge": "20",
    "glueType": "waterproof",
    "detailsNumber": "1",
    "length": "12000",
    "width": "6000",
    "totalWithDiscount": "111434.4"
  }],
  "finalSum": null,
  "client": {
    "name": "asdsad",
    "phone": " 3(242)3423423",
    "email": "aaa@a",
    "city": "Днепр",
    "message": "asdad"
  }
};