-- phpMyAdmin SQL Dump
-- version 3.3.7deb5build0.10.10.1
-- http://www.phpmyadmin.net
--
-- Хост: localhost
-- Время создания: Июн 22 2012 г., 19:24
-- Версия сервера: 5.1.61
-- Версия PHP: 5.3.3-1ubuntu9.10

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- База данных: `ldinka_bubu`
--

-- --------------------------------------------------------

--
-- Структура таблицы `articles`
--

CREATE TABLE IF NOT EXISTS `articles` (
  `article_id` int(5) unsigned NOT NULL AUTO_INCREMENT,
  `article_name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_intro` text CHARACTER SET utf8 NOT NULL,
  `article_content` text CHARACTER SET utf8 NOT NULL,
  `article_author` varchar(255) CHARACTER SET utf8 NOT NULL,
  `article_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `article_approved` smallint(1) unsigned NOT NULL DEFAULT '0',
  PRIMARY KEY (`article_id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=6 ;

--
-- Дамп данных таблицы `articles`
--

INSERT INTO `articles` (`article_id`, `article_name`, `article_intro`, `article_content`, `article_author`, `article_date`, `article_approved`) VALUES
(1, 'Как сделать бумажный самолетик-катапульту', 'Бумажные самолетики любят запускать все и это абсолютно не зависит от возраста или гендерной принадлежности. Самое главное в изготовлении бумажного самолетика — качественная бумага и соблюдение правил аэродинамики. Та как с последними знакомы далеко не все, есть ещё один хитрый способ заставить полететь ваш самолетик далеко и высоко — приделать к нему резинку и катапультировать!', '<p>Бумажные самолетики любят запускать все и это абсолютно не зависит от возраста или гендерной принадлежности. Самое главное в изготовлении бумажного самолетика — качественная бумага и соблюдение правил аэродинамики. Та как с последними знакомы далеко не все, есть ещё один хитрый способ заставить полететь ваш самолетик далеко и высоко — приделать к нему резинку и катапультировать!</p>\r\n\r\n<p>Страшно представить, какое количество тетрадок улетело с моего балкона в виде бумажных самолетиков! Мы с друзьями устраивали целые турниры по запуску и придумывали различные усовершенствования, начиная от разных вариантов бумаги и заканчивая утяжелением различных частей бумажной конструкции. А после того, как дворники устроили нам бунт с угрозой физической расправы, нам пришлось привязывать самолетики катушечной ниткой, чтоб можно было вернуть их обратно.</p>\r\n\r\n<p>Запуски производились с балкона, потому что самолетики летели далеко и красиво. А вот устроить стремительный старт на ровном месте не очень-то и получалось. Благодаря найденному лайфхаку у меня появился шанс запустить самолетик красиво и далеко уже совместно с моим сыном! Уловка заключается в том, что вы приделываете к основе своего бумажного летуна петлю из резинки, благодаря ей и простому карандашу, он и запускается, как с катапульты.</p>\r\n\r\n<p>Запускаете это чудо техники с помощью простого карандаша: цепляете резинку за один конец карандаша или палочки, оттягиваете назад самолетик и отпускаете. Автор первоисточника обещает стремительный полет на внушительную дистанцию.</p>\r\n\r\n<p>Я проверила: летит, как ракета!</p>', 'Irina Baranskaya', '2012-06-20 20:21:47', 1),
(2, 'Как открыть бутылку пива с помощью iPhone?', 'Если купили несколько бутылок пива, а под рукой не оказалось ни открывалки, ни швейцарского ножа, ни хотя бы ключей, можно воспользоваться обычным телефоном iPhone 4S. Пример показывает молодежь из Поднебесной империи.', '<p>Если купили несколько бутылок пива, а под рукой не оказалось ни открывалки, ни швейцарского ножа, ни хотя бы ключей, можно воспользоваться обычным телефоном iPhone 4S. Пример показывает молодежь из Поднебесной империи.</p>\r\n\r\n<p>Ребята открывали пиво при помощи Meizu MX (флагман местного производства на базе Android) и iPhone 4S, а сам процесс запечатлели на видео. Оказалось, что iPhone 4S плохо справился с испытанием — пиво открыть удалось, но вот на корпусе появились царапины и сколы. Meizu MX значимых повреждений не получил.</p>\r\n\r\n<p>Увы, но «невооруженный» айфон не подходит для открытия пива. К счастью, как мы знаем, вокруг телефона Apple уже сформировалась экосистема производителей аксессуаров. И многие чехлы выпускаются именно с одной целью: упростить открытие пива.</p>', 'Слава Баранский', '2012-06-21 20:21:47', 1),
(4, 'qwe', '	Если &quot;купили&quot; &#39;несколько&#39; бутылок пива, а под рукой не оказалось ни открывалки, ни швейцарского ножа, ни хотя бы ключей, можно воспользоваться обычным телефоном iPhone 4S Пример показывает молодежь из Поднебесной империи	Бумажные самолетики любят запускать все и это абсолютно не зависит от возраста или гендерной принадлежности Самое главное в изготовлении бумажного самолетика &mdash; качественная бумага и соблюдение правил аэродинамики Та как с последними знакомы далеко не все...', '<p>	Если &quot;купили&quot; &#39;несколько&#39; бутылок пива, а под рукой не оказалось ни открывалки, ни швейцарского ножа, ни хотя бы ключей, можно воспользоваться обычным телефоном iPhone 4S Пример показывает молодежь из Поднебесной империи</p><p>	Бумажные самолетики любят запускать все и это абсолютно не зависит от возраста или гендерной принадлежности Самое главное в изготовлении бумажного самолетика &mdash; качественная бумага и соблюдение правил аэродинамики Та как с последними знакомы далеко не все, есть ещё один хит способ заставить полететь ваш самолетик далеко и высоко &mdash; приделать к нему резинку и катапультировать!</p><p>	Бумажные самолетики любят запускать все и это абсолютно не зависит от возраста или гендерной принадлежности Самое главное в изготовлении бумажного самолетика &mdash; качественная бумага и соблюдение правил аэродинамики Та как с последними знакомы далеко не все, есть ещё один хитрый способ заставить полететь ваш самолетик далеко и высоко &mdash; приделать к нему резинку и катапультировать!</p><p>	Если купили несколько бутылок пива, а под рукой не оказалось ни открывалки, ни швейцарского ножа, ни хотя бы ключей, можно воспользоваться обычным телефоном iPhone 4S. Пример показывает молодежь из Поднебесной империи.</p>', '123', '2012-06-21 22:47:08', 0);

-- --------------------------------------------------------

--
-- Структура таблицы `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `user_id` int(3) NOT NULL AUTO_INCREMENT,
  `user_login` varchar(255) CHARACTER SET utf8 NOT NULL,
  `user_password` varchar(32) CHARACTER SET utf8 NOT NULL,
  PRIMARY KEY (`user_id`),
  UNIQUE KEY `user_login` (`user_login`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Дамп данных таблицы `users`
--

INSERT INTO `users` (`user_id`, `user_login`, `user_password`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70');