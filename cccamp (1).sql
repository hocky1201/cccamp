-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- 主機: localhost
-- 產生時間： 2017 年 06 月 16 日 13:43
-- 伺服器版本: 5.7.18-0ubuntu0.16.04.1
-- PHP 版本： 7.0.18-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- 資料庫： `cccamp`
--

-- --------------------------------------------------------

--
-- 資料表結構 `activity`
--

CREATE TABLE `activity` (
  `act_code` int(10) NOT NULL,
  `act_name` varchar(100) DEFAULT NULL,
  `act_desc` varchar(300) DEFAULT NULL,
  `act_price` int(5) DEFAULT NULL,
  `act_area` enum('臺北市','新北市','桃園市','臺中市','臺南市','高雄市','基隆市','桃園縣','新竹市','新竹縣','苗栗縣','彰化市','彰化縣','南投縣','雲林縣','嘉義市','嘉義縣','屏東市','屏東縣','台東縣','花蓮市','花蓮縣','宜蘭縣','澎湖縣','金門縣','連江縣','香港','海外','其他') DEFAULT NULL,
  `act_stage1` varchar(5) DEFAULT NULL,
  `act_stage2` varchar(5) DEFAULT NULL,
  `act_stage3` varchar(5) DEFAULT NULL,
  `act_stage4` varchar(5) DEFAULT NULL,
  `act_stage5` varchar(5) DEFAULT NULL,
  `act_stage6` varchar(5) DEFAULT NULL,
  `act_stage7` varchar(5) DEFAULT NULL,
  `act_stage8` varchar(5) DEFAULT NULL,
  `act_field` enum('法政','財經','外語','數理化學','地球與環境','資訊','生物資源','建築','設計','藝術','社會與心理','大眾傳播','文史哲','教育','管理','運動遊憩','工程','機器人','生命科學','醫藥衛生','其他') DEFAULT NULL,
  `act_poster` varchar(15000) DEFAULT NULL,
  `act_url` varchar(100) DEFAULT NULL,
  `act_signup_starttime` date DEFAULT NULL,
  `act_signup_endtime` date DEFAULT NULL,
  `act_starttime` date DEFAULT NULL,
  `act_endtime` date DEFAULT NULL,
  `act_PICname` varchar(10) DEFAULT NULL,
  `act_PICphone` varchar(10) DEFAULT NULL,
  `act_ORG` varchar(40) DEFAULT NULL,
  `u_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `activity`
--

INSERT INTO `activity` (`act_code`, `act_name`, `act_desc`, `act_price`, `act_area`, `act_stage1`, `act_stage2`, `act_stage3`, `act_stage4`, `act_stage5`, `act_stage6`, `act_stage7`, `act_stage8`, `act_field`, `act_poster`, `act_url`, `act_signup_starttime`, `act_signup_endtime`, `act_starttime`, `act_endtime`, `act_PICname`, `act_PICphone`, `act_ORG`, `u_code`) VALUES
(1, '國立嘉義大學2017行銷營', '兩人以上團報4000/人 早鳥前報名再折300', 4500, '臺北市', '幼稚園 ', '國小 ', '國中 ', '高中 ', '高職 ', '大專院校 ', '研究所 ', '社會人士 ', '財經', 'http://camp.347.com.tw/eventFiles/0/1489989286248.png', 'http://ncyumtm.wixsite.com/ncyumltc', '2017-05-07', '2017-05-24', '2017-07-05', '2017-07-08', '洪佳雯', '0910340128', '嘉義大學·行銷與觀光管理學系', 1),
(2, '勤益科技大學格鬥擂台機器人研習營', '106年6月底前報名，享早鳥價4,500元 三人團報，每人可享300元。', 5000, '臺北市', '', '', '', '高中 ', '高職 ', '', '', '', '機器人', 'http://camp.347.com.tw/eventFiles/0/1496282203485.png', 'http://realgood520.pixnet.net/blog/post/222571443', '2017-06-05', '2017-08-19', '2017-08-26', '2017-08-27', '大碩青年關懷基金會', '0435061355', '大碩青年關懷基金會', 1),
(3, '2017第六屆國立高雄大學資管營-資速列車', '無', 4200, '臺北市', '', '', '', '高中 ', '高職 ', '', '', '', '資訊', 'http://camp.347.com.tw/eventFiles/5159/1492650827062.png', 'https://noobtw.github.io/imcamp2017/index.html', '2017-05-01', '2017-05-28', '2017-07-10', '2017-07-14', '林宜瑩', '0988275715', '國立高雄大學資訊管理系', 1),
(4, '【口語表達溝通營】2017高中夏令營', '以繳費先後錄取學員，優惠價:(即日起至2017年07月10日止)', 4500, '臺北市', '', '', '國中 ', '高中 ', '高職 ', '', '', '', '社會與心理', 'http://camp.347.com.tw/eventFiles/4928/1492338131826.png', 'http://www.17learn.com.tw/curriculum/detail/149180778028746', '2017-06-05', '2017-08-18', '2017-08-18', '2017-08-21', '林小姐', '0266176779', '實踐大學·推廣教育中心', 2),
(5, '2017暑假LED科學探索高中營', '3人(含)以上團報價5,500元/人 或 5/31前報名享早鳥價5,500', 5800, '臺北市', '', '', '', '高中 ', '', '', '', '', '數理化學', 'http://camp.347.com.tw/eventFiles/5672/1495101859171.png', 'http://cnmm.web.nthu.edu.tw/files/14-1012-116088,r632-1.php?Lang=zh-tw', '2017-06-06', '2017-06-29', '2017-06-29', '2017-06-30', '劉小姐', '035742267', '國立清華大學·奈微與材料科技中心', 2),
(13, 'Helen O Grady 英語戲劇夏令營2017(天母教室)', '兩人同行，第二人半價，可分別報名不同梯、不同場。', 14988, '臺北市', '幼稚園 ', '國小 ', '', '', '', '', '', '', '文史哲', 'http://camp.347.com.tw/eventFiles/0/1490944330405.png', 'http://www.helenogrady.com.tw', '2017-06-08', '2017-06-15', '2017-06-27', '2017-06-30', '英語戲劇學院', '0229618258', 'Helen O Grady英語戲劇夏令營·Helen O Grady英語戲劇學院', 1),
(14, '啾啾~啾~啾啾啾!', '啾啾啾啾~啾~啾啾啾?啾!啾啾啾......啾啾~啾啾啾?啾!!!!!\r\n啾啾啾啾啾!!!!!!!\r\n啾啾啾?\r\n啾!', 9999, '高雄市', '幼稚園 ', '國小 ', '國中 ', '高中 ', '高職 ', '大專院校 ', '研究所 ', '社會人士 ', '其他', 'data:image/jpeg;base64,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', 'http://bmf.i-revo.jp/zektbach/index.html', '2017-06-08', '2017-06-30', '2017-07-27', '2017-07-27', '啾啾', '999999999', '啾啾啾~啾!啾啾啾啾>3', 7),
(16, '嗨嗨', '嗨嗨108', 999910, '高雄市', '幼稚園 ', '國小 ', '', '', '', '', '', '', '資訊', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSY2W5Ts3ZiFiebtKQzUZinFkZorklVCOZqszzhaHdVdUCuq6SF', 'http://www.nuk.edu.tw/bin/home.php', '2017-06-07', '2017-06-30', '2017-06-30', '2017-07-01', '教授好', '987', '嗨嗨888', 2),
(21, '要被刪除的營隊', '刪除吧!', 6665, '臺北市', '', '', '', '高中 ', '', '', '', '', '數理化學', 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTxdY7TrNXggziIAOecxMKZ6NratRZY5UT1Ugit3-tNzXhs0ipKbA', 'https://www.youtube.com/watch?v=h--P8HzYZ74', '2017-06-04', '2017-06-06', '2017-06-18', '2017-06-14', '刪刪刪', '09488', '就是要刪', 16);

-- --------------------------------------------------------

--
-- 資料表結構 `collect`
--

CREATE TABLE `collect` (
  `col_code` int(10) NOT NULL,
  `u_code` int(10) NOT NULL,
  `act_code` int(10) NOT NULL,
  `col_record` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `collect`
--

INSERT INTO `collect` (`col_code`, `u_code`, `act_code`, `col_record`) VALUES
(3, 3, 2, '收藏'),
(5, 4, 5, '收藏'),
(6, 4, 4, '收藏'),
(7, 5, 5, '收藏'),
(8, 3, 5, '收藏'),
(14, 3, 1, '收藏'),
(15, 5, 1, '收藏'),
(17, 8, 1, '收藏'),
(18, 3, 14, '收藏'),
(19, 8, 14, '收藏'),
(20, 6, 14, '收藏'),
(21, 3, 4, '收藏'),
(22, 8, 2, '收藏'),
(23, 6, 13, '收藏'),
(24, 12, 14, '收藏'),
(25, 13, 1, '收藏'),
(26, 13, 2, '收藏'),
(27, 14, 2, '收藏'),
(28, 14, 3, '收藏'),
(29, 14, 14, '收藏'),
(30, 15, 2, '收藏'),
(31, 3, 21, '收藏'),
(32, 13, 1, '不收藏'),
(33, 13, 1, '不收藏'),
(34, 18, 13, '收藏'),
(35, 18, 13, '不收藏'),
(36, 18, 1, '收藏'),
(37, 18, 1, '不收藏'),
(38, 18, 1, '不收藏'),
(39, 19, 13, '收藏');

-- --------------------------------------------------------

--
-- 資料表結構 `comment`
--

CREATE TABLE `comment` (
  `c_code` int(11) NOT NULL,
  `act_code` int(10) NOT NULL,
  `u_code` int(10) NOT NULL,
  `c_content` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `comment`
--

INSERT INTO `comment` (`c_code`, `act_code`, `u_code`, `c_content`) VALUES
(1, 1, 3, '我是33，我覺得很棒'),
(2, 1, 3, '我是33，我想留第二次言'),
(3, 1, 3, '我是33，我想留第三次言'),
(4, 2, 3, '我是33，我喜歡一一的營隊，我想留第四次言'),
(5, 3, 3, '我是33，我喜歡一一的營隊，我想留第五次言'),
(6, 5, 3, '我是33，我不喜歡二二的營隊'),
(8, 1, 4, '我是44，我不喜歡一一的營隊\r\n'),
(10, 4, 4, '我是44，收藏'),
(35, 21, 3, '33刪刪qwq'),
(36, 13, 19, 'ttt');

-- --------------------------------------------------------

--
-- 資料表結構 `news`
--

CREATE TABLE `news` (
  `n_code` int(10) NOT NULL,
  `n_content` varchar(500) DEFAULT NULL,
  `n_time` varchar(30) NOT NULL,
  `u_code` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `news`
--

INSERT INTO `news` (`n_code`, `n_content`, `n_time`, `u_code`) VALUES
(1, '國立嘉義大學2017行銷營 愛麗絲銷遊夢境報名要截止囉!!!', '2017年6月5日12時12分44秒 ', 1),
(4, '新活動上線!!', '2017年6月5日13時32分00秒 ', 2),
(28, '刪我刪我', '2017年6月6日22時57分00秒 ', 16),
(31, '總帶給人深不可測神秘感氣息的 Lorde，在昨日悄悄地上架了專輯中的新曲〈Perfect Places〉啦！', '2017年6月6日22時58分34秒 ', 16),
(41, '2017-07-05 國立嘉義大學2017行銷營 因暴雨延期，時間另行公布', '2017年6月7日13時00分', 7),
(42, '2017-06-08 05:00~07:00 網站維護，造成不便敬請見諒', '2017年6月7日13時01分40秒 ', 10),
(43, '2017-06-29 2017暑假LED科學探索高中營 場地更換，請有報名者多加留意！', '2017年6月7日13時04分36秒 ', 10);

-- --------------------------------------------------------

--
-- 資料表結構 `user`
--

CREATE TABLE `user` (
  `u_code` int(10) NOT NULL,
  `u_id` varchar(10) NOT NULL,
  `u_pwd` varchar(15) NOT NULL,
  `u_name` varchar(10) NOT NULL,
  `u_phone` varchar(10) DEFAULT NULL,
  `u_email` varchar(100) DEFAULT NULL,
  `u_auth` enum('user','admin','su') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- 資料表的匯出資料 `user`
--

INSERT INTO `user` (`u_code`, `u_id`, `u_pwd`, `u_name`, `u_phone`, `u_email`, `u_auth`) VALUES
(1, '11', '99', '一一co', '0911111', '111@11', 'admin'),
(2, '22', '88', '二二是me喔', '09222233', '22@2', 'admin'),
(3, '33', '77', '三三是我1ya', '0937755', '33@33', 'user'),
(4, '44', '66', '四四', '9444', '44@4', 'user'),
(5, '55', '55', '五五', '095555', '555@4354', 'user'),
(6, 'jack0101', 'snow1231', 'Jack', '8080', 'jack0101@gmail.com', 'user'),
(7, 'juju', 'juju', '啾啾啾啾啾啾啾啾啾啾', '99999999', 'juju99@gmail.com', 'admin'),
(8, 'amy', 'amyy', '雯雯', '0937777777', 'amyy@yy', 'user'),
(9, '23', '23', '23', '23', '23@23', 'admin'),
(10, 'super', 'super', '我最大', '999', '999@999', 'su'),
(11, 'sqlinject', 'hongkong3345678', 'admin', '051234567', 'cyooo40@yahoo.com.tw', 'user'),
(12, 'jojo', 'jojo21', 'Yoyo', '99999', 'jojo999@gmail.com', 'user'),
(13, '123', '123', 'ㄊㄊ', '123', '123@gmail.com', 'user'),
(14, '87', '87', '8787', '8778', '87@87', 'user'),
(15, 'qq', 'qq', 'qq', '333', 'qq@ww', 'user'),
(16, 'test', 'test', 'demo', '09666', 'demo@demo', 'admin'),
(17, 'dd', 'dd', 'dd', '12', 'dd@dd', 'admin'),
(18, 'ww', 'ww', 'wwqq', '55', 'ww@ww', 'user'),
(19, 'zz', 'zz', 'zzz', '44', 'zz@zz', 'user');

--
-- 已匯出資料表的索引
--

--
-- 資料表索引 `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`act_code`),
  ADD KEY `u_code` (`u_code`);

--
-- 資料表索引 `collect`
--
ALTER TABLE `collect`
  ADD PRIMARY KEY (`col_code`),
  ADD KEY `u_code` (`u_code`),
  ADD KEY `act_code` (`act_code`);

--
-- 資料表索引 `comment`
--
ALTER TABLE `comment`
  ADD PRIMARY KEY (`c_code`),
  ADD KEY `act_code` (`act_code`),
  ADD KEY `u_code` (`u_code`);

--
-- 資料表索引 `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`n_code`),
  ADD KEY `u_code` (`u_code`);

--
-- 資料表索引 `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_code`);

--
-- 在匯出的資料表使用 AUTO_INCREMENT
--

--
-- 使用資料表 AUTO_INCREMENT `activity`
--
ALTER TABLE `activity`
  MODIFY `act_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;
--
-- 使用資料表 AUTO_INCREMENT `collect`
--
ALTER TABLE `collect`
  MODIFY `col_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;
--
-- 使用資料表 AUTO_INCREMENT `comment`
--
ALTER TABLE `comment`
  MODIFY `c_code` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- 使用資料表 AUTO_INCREMENT `news`
--
ALTER TABLE `news`
  MODIFY `n_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=53;
--
-- 使用資料表 AUTO_INCREMENT `user`
--
ALTER TABLE `user`
  MODIFY `u_code` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- 已匯出資料表的限制(Constraint)
--

--
-- 資料表的 Constraints `activity`
--
ALTER TABLE `activity`
  ADD CONSTRAINT `activity_ibfk_1` FOREIGN KEY (`u_code`) REFERENCES `user` (`u_code`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- 資料表的 Constraints `collect`
--
ALTER TABLE `collect`
  ADD CONSTRAINT `collect_ibfk_1` FOREIGN KEY (`u_code`) REFERENCES `user` (`u_code`),
  ADD CONSTRAINT `collect_ibfk_2` FOREIGN KEY (`act_code`) REFERENCES `activity` (`act_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `comment`
--
ALTER TABLE `comment`
  ADD CONSTRAINT `comment_ibfk_2` FOREIGN KEY (`u_code`) REFERENCES `user` (`u_code`),
  ADD CONSTRAINT `comment_ibfk_3` FOREIGN KEY (`act_code`) REFERENCES `activity` (`act_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- 資料表的 Constraints `news`
--
ALTER TABLE `news`
  ADD CONSTRAINT `news_ibfk_1` FOREIGN KEY (`u_code`) REFERENCES `user` (`u_code`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
