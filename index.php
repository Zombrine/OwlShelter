<html>
   <head>
      <title>Owl Shelter</title>
      <meta charset="utf-8">
     <?= '<link href="index.css?'.microtime().'" rel="stylesheet">' ?>
   </head>
   <body>
      
      <script src="index.js"></script>
      <script src="jquery-1.11.0.min.js"></script>
      <script type="text/javascript">
         var index = new index ();
      </script>
      
      <table width="100%" border="0" style="border: 0px solid black; position: absolute; top: -3px; left: -3px;">
<!--Шапка-->
         <tr>
            <td colspan="2">
               <div id="Head">
                  <img src="img/HeadPhoto.png">
                  <div id="Logo" style="position: absolute; top: 15px; left: 200px;">
                     <img src="img/Logo.png">
                  </div>
               </div>
            </td>
         </tr>
<!--Конец Шапки-->
<!--Главное содержимое-->
         <tr height="100px">
            <td id="menuTd" width="30%" style="vertical-align: top; height: 100px;">
               <div id="menu">
                  <!--Копировать для нового подменю отсюда
                  <div id="TUTid">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Рисунки наших художников
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        TEXT
                     </div>
                  </div>
                  до сюда-->
                  <!--Копировать для конечного пункта (для описания) отсюда
                  <div class="end" id="FILEid">
                     Краткое описание игры
                  </div>
                  до сюда-->
                 
                  <div id="detailedGameInfo">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Описание игры
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        <div class="end" id="shortDescription">
                           Краткое описание игры
                        </div>
                        <div class="end" id="Day1">
                           День первый
                        </div>
                        <div id="gameInfoDiferent">
                           <label class="submenu">
                              <img src="img/Style/plus.png"> Разное
                           </label>
                           <br>
                           <div class="submenu2" style="padding-left: 15px;">
                               <div class="end" id="DriedBitBakedPatty">
                                 Засохший надкушеный пирожок
                              </div>
                              <div class="end" id="Postcards">
                                 Открытки
                              </div>
                              <div class="end" id="WhereAllTheBidets">
                                 Куда подевались все биде
                              </div>
                              <div class="end" id="Collections">
                                 Коллекции
                              </div>
                              <div class="end" id="BloodyWatercolor">
                                 Кровавая акварель
                              </div>
                              <div class="end" id="KillingByHerbs">
                                 Убийство травами
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div id="characters">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Персонажи
                     </label>
                     <br>
                     <div class="submenu2">
                        <div class="end" id="JaneAndMerry">
                           Мисс Джейн и Мери Адлтон
                        </div>
                        <div class="end" id="Nathaniel">
                           Профессор Натаниель Коэн
                        </div>
                        <div class="end" id="Timmy">
                           Тимми Коэн
                        </div>
                        <div class="end" id="Mark">
                           Марк Розковик
                        </div>
                        <div class="end" id="Charlotte">
                           Шарлота Джулс
                        </div>
                        <div class="end" id="Henry">
                           Генри Куфэ
                        </div>
                        <div class="end" id="Idles">
                           Идлз Эдмонд
                        </div>
                        <div class="end" id="Kimmy">
                           Кимми Аяш
                        </div>
                        <div class="end" id="Lovell">
                           Ловелла Аяш
                        </div>
                        <div class="end" id="Agatha">
                           Агата Элеонор Эшмор
                        </div>
                        <div class="end" id="Algernon">
                           Элджернон Говард Эшмор
                        </div>
                        <div class="end" id="Abigail">
                           Абигейл Коулиер
                        </div>
                        <div class="end" id="Ruby">
                           Руби Хоппер
                        </div>
                        <div class="end" id="Moris">
                           Морис Блекуэлл
                        </div>   
                          <div class="end" id="CharactersRelationship">
                           Описание отношений персонажей
                        </div>   
                     </div>
                  </div>
                  <div id="locations">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Локации
                     </label>
                     <br>
                     <div class="submenu2">
                        <div id="levelMainBuilding">
                           <label class="submenu">
                              <img src="img/Style/plus.png">1.Главный корпус «Совиного Приюта»
                           </label>
                           <br>
                           <div class="submenu2" style="padding-left: 15px;">
                               <div class="end" id="LevelMainNature">
                                  Природа, окружение
                               </div>
                               <div class="end" id="LevelMainHouse">
                                 Дом
                              </div>
                               <div class="end" id="LevelMainDecoration">
                                 Декорация дома
                              </div>
                           </div>
                        </div>

                        <div class="end" id="SummerTheater">
                           2.Летний театр
                        </div>
                        <div class="end" id="OldObservatory">
                           3.Старая обсерватория
                        </div>
                        <div class="end" id="LumberCamp">
                           4.Лагерь лесорубов
                        </div>
                        <div class="end" id="OldCableCar">
                           5.Старая канатная дорога
                        </div>
                        <div class="end" id="LakeHouse">
                           6.Дом у озера
                        </div>
                        <div class="end" id="Mansion">
                           7.Особняк «Совиное Гнездо»
                        </div> 
                         <div class="end" id="GeneralInfoLocations">
                           Общая информация по локациям
                        </div> 
                     </div>
                  </div>
                  <div id="team">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Команда
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        <div class="end" id="Control">
                           Управление
                        </div>
                        <div class="end" id="3D">
                           3D
                        </div>
                        <div class="end" id="2D">
                           2D
                        </div>
                        <div class="end" id="Unity">
                           Unity C#
                        </div>
                        <div class="end" id="leveldesign">
                           Level-дизайн
                        </div>
                        <div class="end" id="WebProgramming">
                           Web-программирование
                        </div>
                        <div class="end" id="Gamedesign">
                           Геймдизайн
                        </div>
                     </div>
                  </div>
                  <div id="arts">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Рисунки наших художников
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        <div class="end" id="Lera">
                           Лера
                        </div>
                        <div class="end" id="Ruslana">
                           Руслана Холина
                        </div>
                        <div class="end" id="Michael">
                           Майкл Сумин
                        </div>
                        <div class="end" id="Alexandra">
                           Александра
                        </div>
                         <div class="end" id="ViktoriaChernenko">
                           Виктория Черненко
                        </div>
                         <div class="end" id="ValeriiSinimus">
                           Валерий Синимус 
                        </div>
                         <div class="end" id="Yaroslava">
                           Ярослава
                        </div>
                     </div>
                  </div>
                  <div id="3dModels">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> 3D модели
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        <div class="end" id="MaratZahidulin3D">
                           Марат Загидулин
                        </div>
                     </div>
                  </div>
                  <div id="reference">
                     <label class="submenu">
                        <img src="img/Style/plus.png"> Референсы из интернета
                     </label>
                     <br>
                     <div class="submenu2" style="padding-left: 15px;">
                        <div class="end" id="Furniture30">
                           Мебель 30х годов
                        </div>
                        <div class="end" id="NotebookApple">
                           Ноутбук Apple
                        </div>
                     </div>
                  </div>
                   <div class="end" id="HR">
                     Принять участие в разработке 
                  </div>
               </div>
               
            </td>
            <td id="DescriptionTd" style="vertical-align: top; width: 70%;">
               <div id="Description">
                  
               </div>
            </td>
         </tr>
<!--Конец Главного содержимого-->
      </table>
      
      <script type="text/javascript">
         $('.submenu').attr ('ondragstart', 'return false;'); // Отключаем возможность перетаскивания картинки
         $('#menu').attr ('onselectstart', 'return false;'); // Отключаем возможность выделения текста
         $('.submenu').click (function (event) {
            
            function ShowSubmenu (DOM)
            {
               DOM.show ();
               DOM.parent ().children ('.submenu').children ().attr ('src', 'img/Style/minus.png');
               if (DOM.parent ().parent ().attr ('class') == 'submenu2') ShowSubmenu (DOM.parent ().parent ());
            }
            
            var Temp = (($(event.target).parent ().attr ('id')) ? ($(event.target).parent ()) : ($(event.target).parent ().parent ()));
            Temp = Temp.children ('.submenu2');
            if (Temp.css ('display') == 'none') {
               ShowSubmenu (Temp);
            }
            else {
               Temp.hide ();
               ($(event.target).parent ().attr ('id')) ? $(event.target).children().attr ('src', 'img/Style/plus.png') : $(event.target).attr ('src', 'img/Style/plus.png');
            }
         });
         var CurrentDescription;
         $('.end').click (function (event) {
            try {
               var FileName = $(event.target).attr ('id');
               CurrentDescription = eval ('0, function () {' + GetContent ('Descriptions/' + FileName + '.js') + ';return new Info ();}') ();
               $('#Description').empty ();
               CurrentDescription.Show ();
               window.location.hash = FileName;
               $('.end').css ('font-weight', 'default');
               $(event.target).css ('font-weight', 'bold');
            }
            catch (Err) {
               alert ('File not found');
            }
         });
         
         $(window).on ('resize', OnResize);
         function OnResize ()
         {
            $('#menu').css ('height', window.innerHeight - 110);
            $('#Description').css ('height', window.innerHeight - 110);
            $('#menuTd').css ('min-width', (window.innerWidth * 0.3) - 50);
            $('#DescriptionTd').css ('min-width', (window.innerWidth * 0.7) - 50);
            $('#Head').css ('width', window.innerWidth - 45);
            $('#Description').css ('width', window.innerWidth * 0.7);
            $('#Logo').css ('left', (window.innerWidth / 2) - 100);
         }
         
         function AtStart ()
         {
            if (window.location.hash) {
               try {
                  var FileName = window.location.hash;
                  $(FileName).trigger ('click');
                  try {
                     $(FileName).parent ().parent ().children ('.submenu').trigger('click');
                  }
                  catch (Err) {}
               }
               catch (Err) {
                  alert ('File not found');
               }
            }
            OnResize ();
         }
         
         function GetContent (url) {
            url = 'http://' + location.hostname + '/owlshelter/' + url + '?' + new Date();
            var req = null;
            try { req = new ActiveXObject("Msxml2.XMLHTTP"); } catch (e) {
               try { req = new ActiveXObject("Microsoft.XMLHTTP"); } catch (e) {
                  try { req = new XMLHttpRequest(); } catch(e) {}
               }
            }
            if (req == null) throw new Error('XMLHttpRequest not supported');
            req.open("GET", url, false);
            req.send(null);
            return req.responseText;
         }
         
         AtStart ();

      </script>
   </body>
</html>
