$(function () {
  var products,
    finalSum;

  $('#basket').on('updated', updateData);

  updateData();

  function updateData () {
    products = JSON.parse(localStorage.getItem('products'));
    finalSum = localStorage.getItem('finalSum');
    products && products.length? renderProducts(): renderEmptyMsg();
  }

  function renderProducts () {
    $('#productsList').empty();
    products.forEach(function (product, key) {
      $('#productsList').append('<li>' + key + '.' +
        '<span class="itemName">' + product.itemName + '</span>' +
        '<span class="woodBreed">' + product.woodBreed + '</span>' +
        '<span class="options">' + product.length + 'x' + product.width + '</span>' +
        '<span class="totalWithDiscount">' + product.totalWithDiscount + '</span>' +
        '</li>');
    });
  }

  function renderEmptyMsg () {
    $('#productsList').html('Корзина пуста');
  }
});
