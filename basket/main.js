$(function () {
  var products,
    finalSum,
    dictionary,
    $productsList = $('#productsList');

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

  function updateData () {
    products = JSON.parse(localStorage.getItem('products'));
    finalSum = localStorage.getItem('finalSum');
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

  function renderEmptyMsg () {
    $('#productsList').html('Корзина пуста');
  }
});
