<?php
session_start();
include_once 'dbconnect.php';
?>
<!doctype html>
<?php include("layouts/header.php");  ?>
<html lang="ru">

<body data-page="catalogDB">
    <div class="container">
<span style="font-size:30px;cursor:pointer;color:white;" onclick="openNav()">☰ Категории</span>
        <div id="filters" class="col-md-12">
            <div id="mySidenav"class="btn-group sidenav">
              <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>

                <button type="button" data-category="0" class="btn btn-default active js-category">Все категории</button>
                <button type="button" data-category="1" class="btn btn-default js-category">Крупнобытовая техника</button>
                <button type="button" data-category="2" class="btn btn-default js-category">Встраиваемая техника</button>
                <button type="button" data-category="3" class="btn btn-default js-category">Техника для дома</button>
                <button type="button" data-category="4" class="btn btn-default js-category">Техника для готовки</button>
                <button type="button" data-category="5" class="btn btn-default js-category">Техника для кухни</button>
                <button type="button" data-category="6" class="btn btn-default js-category">Техника для напитков</button>
                <button type="button" data-category="7" class="btn btn-default js-category">Красота и уход</button>
                <button type="button" data-category="8" class="btn btn-default js-category">Мед. оборудование</button>
                <button type="button" data-category="9" class="btn btn-default js-category">Сопутствующие товары</button>
                <button type="button" data-category="10" class="btn btn-default js-category">Бытовая химия</button>


                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li class="dropdown"><a href="#">Каталог<i class="fa fa-angle-down"></i></a>
                                <ul style="color:white;" role="menu" class="sub-menu">
                                    <li>
                                      <div id="brands">
                                         <div class="checkbox"><label><input type="checkbox" name="brands[]" value="1"> Apple</label></div>
                                         <div class="checkbox"><label><input type="checkbox" name="brands[]" value="2"> Samsung</label></div>
                                         <div class="checkbox"><label><input type="checkbox" name="brands[]" value="3"> Lenovo</label></div>
                                         <div class="checkbox"><label><input type="checkbox" name="brands[]" value="4"> Что-то еще</label></div>
                                     </div>
                                   </li>
                                </ul>
                            </li>
                        </ul>

                <form id="filters-form" role="form">
                    <div  >
                        <h4>Фильтр по ценам</h4>
                        <div id="prices-label">0 - 0 руб.</div>

                        <input type="hidden" id="min-price" name="min_price" value="5000">
                        <input type="hidden" id="max-price" name="max_price" value="50000">
                        <div id="prices"></div>
                    </div>
                    <div >
                        <h4>Сортировка</h4>

                        <select id="sort" name="sort" class="form-control">
                            <option value="price_asc">По цене, сначала дешевые</option>
                            <option value="price_desc">По цене, сначала дорогие</option>
                            <option value="rating_desc">По популярности</option>
                            <option value="good_asc">По названию, A-Z</option>
                            <option value="good_desc">По названию, Z-A</option>
                        </select>
                    </div>
                </form>
              </div>
                <script>
                function openNav() {
                    document.getElementById("mySidenav").style.width = "285px";
                }

                function closeNav() {
                    document.getElementById("mySidenav").style.width = "0";
                }
                </script>
            </div>

        </div>
        <ul id="goods">
            <img src="img/loading.gif" alt="" />
        </ul>
    </div>

    <script id="goods-template" type="text/template">
        <% _.each(goods, function(item) { %>
        <li class="small-good-item row">
            <div class="col-md-2">
                <img class="small-good-item__img" src="img/goods/<%= item.photo %>" />
            </div>
            <div class="col-md-10">
                <div style="color: white;" class="small-good-item__rating">Название: <%= item.good %></div>
                <div class="small-good-item__price">Цена: <%= item.price %> руб.</div>
                <div style="color: white;" class="small-good-item__brand">Категория: <%- item.brand %></div>
                <div class="small-good-item__name">Описание: <%- item.rating %></div>
                <button
                    class="small-good-item__btn-add btn btn-info btn-sm js-add-to-cart"
                    data-id="<%= item.good_id %>"
                    data-name="<%- item.good %>"
                    data-price="<%= item.price %>"
                >Добавить в корзину</button>
                <!--<button
                    class="btn btn-link btn-sm js-add-to-compare"
                    data-id="<%= item.good_id %>"
                    data-category-id="<%= item.category_id %>"
                >Добавить к сравнению</button>-->
            </div>
        </li>
        <% }); %>
    </script>

    <script id="brands-template" type="text/template">
        <% _.each(brands, function(item) { %>
        <div class="checkbox"><label><input type="checkbox" name="brands[]" value="<%= item.id %>"> <%= item.brand %></label></div>
        <% }); %>
    </script>

    <script src="js/vendor/jquery.min.js" type="text/javascript"></script>
    <script src="js/vendor/jquery.cookie.js" type="text/javascript"></script>
    <script src="components/jquery-ui/jquery-ui.min.js" type="text/javascript"></script>
    <script src="js/vendor/underscore.min.js" type="text/javascript"></script>
    <script src="js/modules/catalogDB.js" type="text/javascript"></script>
    <script src="js/modules/cart.js" type="text/javascript"></script>
    <script src="js/modules/compare.js" type="text/javascript"></script>
    <script src="js/modules/main.js" type="text/javascript"></script>
</body>
</html>
<?php include("layouts/footer.php");  ?>
