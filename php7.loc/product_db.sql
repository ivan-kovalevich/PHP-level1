-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Хост: 127.0.0.1:3306
-- Время создания: Мар 22 2019 г., 13:16
-- Версия сервера: 5.6.41
-- Версия PHP: 5.5.38

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- База данных: `product_db`
--

-- --------------------------------------------------------

--
-- Структура таблицы `basket`
--

CREATE TABLE `basket` (
  `id_basket` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `nam_product` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Структура таблицы `comments`
--

CREATE TABLE `comments` (
  `id_comment` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `comment` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `comments`
--

INSERT INTO `comments` (`id_comment`, `name`, `comment`) VALUES
(4, 'Иван', 'Здравствуйте! Всё хорошо.'),
(5, 'Влад', 'Не очень хорошо. Вёрстка отстой((('),
(6, 'Елизавета', 'Говно)))');

-- --------------------------------------------------------

--
-- Структура таблицы `product`
--

CREATE TABLE `product` (
  `id_product` int(11) NOT NULL,
  `title_product` varchar(100) NOT NULL,
  `price_product` varchar(100) NOT NULL,
  `img_product` varchar(100) NOT NULL,
  `info_product` text NOT NULL,
  `desc_product` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `product`
--

INSERT INTO `product` (`id_product`, `title_product`, `price_product`, `img_product`, `info_product`, `desc_product`) VALUES
(2, 'аккумуляторная отвертка Bosch GO kit + набор бит', '2 590 руб.', '4433601.jpg', 'Bosch GO - это высокая эффективность при малых размерах. Инструмент легче, удобнее и компактнее шуруповерта. При этом он не требует больших усилий - закручивает и раскручивает шуруп одним надавливанием. Bosch Go - отличный помощник в домашнем хозяйстве, ремонте и строительстве.', 'Bosch GO - это высокая эффективность при малых размерах. Инструмент легче, удобнее и компактнее шуруповерта.'),
(3, 'ноутбук Lenovo IdeaPad 330-14AST, 81D5000LRU', '17 990 руб.', '4431734.jpg', 'Иногда лучше ничего не усложнять. Благодаря непревзойденному процессору и поддержке усовершенствованных видеокарт, ноутбук IdeaPad 330 обладает высокой производительностью, оставаясь при этом простым и удобным в использовании. Доступный в различных изысканных цветах, этот надежный и прочный ноутбук гарантирует максимальную эффективность сегодня и в будущем.', 'Иногда лучше ничего не усложнять. Благодаря непревзойденному процессору и поддержке усовершенствованных видеокарт, ноутбук IdeaPad 330 обладает высокой производительностью.'),
(4, 'Шина Viatti Strada Asimmetrico 185/65 R15', '2 490 руб.', '3801568.jpg', 'Летние шины Viatti Strada Asimmetrico - это радиальные бескамерные шины со специальным дорожным асимметричным рисунком протектора. Климатические зоны и капризы погоды не играют роли - при отсутствии снега на дороге покрышки показывают себя с самой лучшей стороны при температуре от +2°C до +55°С.\r\nНадёжность и высокая скорость при прохождении поворотов, а так же ощутимое смягчение ударов при движении через ямы, стыки асфальта и прочие неровности дорожного полотна обеспечиваются технологией VRF (variable rigidity of the framework - переменная жёсткость боковины). Безопасное движение по мокрой дороге даёт система Hydro Safe V - шины не только максимально быстро выводят воду из пятна контакта, но и дают дополнительную устойчивость при поворотах и манёврах на влажном дорожном полотне. Снижение риска аквапланирования гарантируют скоростные отводящие канавки с повышенной эластичностью, расположенные на внутренней стороне протектора.', 'Летние шины Viatti Strada Asimmetrico - это радиальные бескамерные шины со специальным дорожным асимметричным рисунком протектора. Климатические зоны и капризы погоды не играют роли'),
(7, 'карта памяти TransFlash 64ГБ MicroSDXC class 10', '1 160 руб.', '4237973.jpg', 'Карта памяти Samsung EVO Plus - это быстрое и удобное устройство для резервного копирования, просмотра, переноса и передачи файлов. На этом накопителе достаточно места для хранения фотографий, видео, музыки и других личных файлов. Карта памяти может использоваться в смартфонах, планшетах и фотокамерах. Карты серии EVO Plus идеально подходят для записи самых дорогих моментов в жизни и последующем чтении 4K UHD видео на совместимом устройстве.', 'Карта памяти Samsung EVO Plus - это быстрое и удобное устройство для резервного копирования, просмотра, переноса и передачи файлов'),
(8, 'Фитнес-браслет Xiaomi Mi Band 3, черный', '2 290 руб.', '4449299.jpg', 'Фитнес-браслет Xiaomi Mi Band 3 - усовершенствованная модель, которая станет отличным подарком для тех, кто следит за своим здоровьем. Мягкий и безопасный для кожи материал ремешка обеспечит максимально комфортную посадку, а стильный лаконичный дизайн подчеркнет ваш спортивный образ. На большом сенсорном OLED дисплее удобно просматривать входящие уведомления: вы сможете управлять входящими звонками и читать сообщения. Ежедневный подсчет шагов и мониторинг частоты пульса позволит вам быть в курсе ваших основных параметров физической активности.', 'Фитнес-браслет Xiaomi Mi Band 3 - усовершенствованная модель, которая станет отличным подарком для тех, кто следит за своим здоровьем.');

-- --------------------------------------------------------

--
-- Структура таблицы `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_pass` varchar(100) NOT NULL,
  `user_email` varchar(100) NOT NULL,
  `user_role` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Дамп данных таблицы `user`
--

INSERT INTO `user` (`id_user`, `user_name`, `user_pass`, `user_email`, `user_role`) VALUES
(3, 'Иван', '12345', 'ivan_@mail.ru', 1),
(4, 'Елизавета', '12345', 'elizaveta_@mail.ru', 0);

--
-- Индексы сохранённых таблиц
--

--
-- Индексы таблицы `basket`
--
ALTER TABLE `basket`
  ADD PRIMARY KEY (`id_basket`);

--
-- Индексы таблицы `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id_comment`);

--
-- Индексы таблицы `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`id_product`);

--
-- Индексы таблицы `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT для сохранённых таблиц
--

--
-- AUTO_INCREMENT для таблицы `basket`
--
ALTER TABLE `basket`
  MODIFY `id_basket` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT для таблицы `comments`
--
ALTER TABLE `comments`
  MODIFY `id_comment` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT для таблицы `product`
--
ALTER TABLE `product`
  MODIFY `id_product` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT для таблицы `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
