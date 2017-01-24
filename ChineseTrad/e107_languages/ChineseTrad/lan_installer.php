<?php
/*
 * e107 website system
 *
 * Copyright (C) 2008-2009 e107 Inc (e107.org)
 * Released under the terms and conditions of the
 * GNU General Public License (http://www.gnu.org/licenses/gpl.txt)
 *
 *
 *
 * $Source: /cvs_backup/e107_0.8/e107_languages/English/lan_installer.php,v $
 * $Revision$
 * $Date$
 * $Author$
 */
define("LANINS_001", "e107 安裝程序");
define("LANINS_002", "步驟");
define("LANINS_003", "一");
define("LANINS_004", "語言選擇");
define("LANINS_005", "請選擇安裝過程的語言");
define("LANINS_007", "四");
define("LANINS_008", "PHP and MySQL 版本檢查 / 檔案權限檢查");
define("LANINS_009", "重設檔案權限");
define("LANINS_010", "檔案唯讀:");
define("LANINS_010a", "資料夾唯讀:");
define("LANINS_012", "MySQL 功能似乎不存在。 這可能代表 MySQL PHP Extension 未安裝或是您的 PHP 安裝未納入 MySQL 支援。");
define("LANINS_013", "未能判別您的MySQL版次號碼。因不屬致命錯誤，請繼續安裝過程，但注意：e107 須配合 MySQL 版次 >= 3.23 以上才確保正常運作。");
define("LANINS_014", "檔案讀寫權限");
define("LANINS_015", "PHP 版次");
define("LANINS_017", "通過");
define("LANINS_018", "請確認所列的檔案存在並可以讓伺服器有寫入權限。這裡通常指的是變更檔案屬性為 777，但因設備、軟體條件有太多變化組合，有任何問題請詢問您的網站設備人員。");
define("LANINS_019", "在您伺服器上所安裝的 PHP 版次並無法適當地運行e107。e107 需要PHP最低的版次為".MIN_PHP_VERSION." 才能確保順利運行。要不昇級您的php版次或聯絡網站設備人員為您昇級。");
define("LANINS_021", "二");
define("LANINS_022", "MySQL 伺服器詳細資料");
define("LANINS_023", "請在此輸入您的MySQL相關設定
Please enter your MySQL settings here.
假如您有root權限，您可以直接藉由勾選來新增資料庫，若沒有請您
If you have root permissions you can create a new database by ticking the box, if not you must create a database or use a pre-existing one.

If you have only one database use a prefix so that other scripts can share the same database.
If you do not know your MySQL details contact your web host.");
define("LANINS_024", "MySQL 伺服器:");
define("LANINS_025", "MySQL 使用者名稱:");
define("LANINS_026", "MySQL 密碼:");
define("LANINS_027", "MySQL 資料庫:");
define("LANINS_028", "Create 資料庫?");
define("LANINS_029", "資料表 prefix:");
define("LANINS_030", "The MySQL server you would like e107 to use. It can also include a port number. e.g. 'hostname:port' or a path to a local socket e.g. \":/path/to/socket\" for the localhost.");
define("LANINS_031", "The username you wish e107 to use to connect to your MySQL server");
define("LANINS_032", "The Password for the user you just entered. Must not contain single or double quotes.");
define("LANINS_033", "The MySQL database you wish e107 to reside in, sometimes referred to as a schema. Must begin with a letter. If the user has database create permissions you can opt to create the database automatically if it doesn't already exist.");
define("LANINS_034", "The prefix you wish e107 to use when creating the e107 tables. Useful for multiple installs of e107 in one database schema.");
define("LANINS_036", "三");
define("LANINS_037", "MySQL 連接驗證");
define("LANINS_038", "及資料庫創造");
define("LANINS_039", "Please make sure you fill in all fields, most importantly, MySQL Server, MySQL Username and MySQL Database (These are always required by the MySQL Server)");
define("LANINS_040", "錯誤");
define("LANINS_041", "e107 無法用您輸入的資料來建立連接 MySQL 伺服器。請返回上一個頁面並確認資料是正確的。");
define("LANINS_042", "與 MySQL 伺服器的連接已經建立且驗證。");
define("LANINS_043", "無法創建資料庫，請確認您在伺服器有正確的權限可以創建資料庫。");
define("LANINS_044", "已成功創建資料庫");
define("LANINS_045", "請在按鈕上點擊以便進行下一階段");
define("LANINS_046", "五");
define("LANINS_047", "系統管理員的詳細資訊");
define("LANINS_048", "EXIF 延伸功能");
define("LANINS_049", "您輸入的兩次密碼不一致，請返回並再試一次。");
define("LANINS_050", "XML 延伸功能");
define("LANINS_051", "已安裝");
define("LANINS_052", "尚安裝");
define("LANINS_055", "安裝確認");
define("LANINS_056", "六");
define("LANINS_057", " e107 已有完成安裝程序所必要的相關資料。
 請點擊按鈕創建資料庫並儲存您所有的設定。");
define("LANINS_058", "七");
define("LANINS_060", "無法讀取SQL 資料檔案，請確認檔案 [b]core_sql.php[/b] 存在[b]/e107_core/sql[/b] 目錄之中");
define("LANINS_061", "e107 was unable to create all of the required database tables.
Please clear the database and rectify any problems before trying again.");
define("LANINS_069", "e107 has been successfully installed!

For security reasons you should now set the file permissions on the [b]e107_config.php[/b] file back to 644.

Also please delete install.php from your server after you have clicked the button below.");
define("LANINS_070", "e107 was unable to save the main config file to your server.

請確認 [b]e107_config.php[/b] 檔案有正確的讀寫 權限");
define("LANINS_071", "安裝程序已完整");
define("LANINS_072", "系統管理員名稱");
define("LANINS_073", "This is the name you will use to login into the site. If you wish to use this as your display name also");
define("LANINS_074", "系統管理員示名稱");
define("LANINS_076", "系統管理員密碼");
define("LANINS_077", "請輸入您要在這用的系統管理員密碼");
define("LANINS_078", "系統管理員密碼確認");
define("LANINS_079", "請再次輸入系統管理員密碼以供確認");
define("LANINS_080", "系統管理員 Email");
define("LANINS_081", "輸入您的 email 位址");
define("LANINS_083", "MySQL 已報告錯誤:");
define("LANINS_084", "安裝程序似乎無法建立與資料庫的接");
define("LANINS_085", "安裝程序似乎無法選擇資料庫:");
define("LANINS_086", "系統管理員名稱, 系統管理員密碼及系統管理員 Email 是必填的欄位。 
請返回上一頁並確認資料正確的輸入。");
define("LANINS_105", "資料庫名稱 or prefix beginning with some digits followed by 'e' or 'E' is not acceptable");
define("LANINS_106", "警告!!! - e107 無法寫入下列的資料夾或檔案。但這並不會停止安裝程序，只是某些功能會無法使用。若要使用這些功能請變更檔案讀寫權限屬性。");
define("LANINS_107", "網站名稱");
define("LANINS_108", "我的網站");
define("LANINS_109", "網站的佈景主題");
define("LANINS_111", "包含內容/設定");
define("LANINS_112", "Quickly reproduce the look of the theme preview or demo. (如果有的話)");
define("LANINS_113", "請輸入一個網站的名稱");
define("LANINS_114", "請選擇一個佈景主題");
define("LANINS_115", "佈景主題名稱");
define("LANINS_116", "佈景主題 類型");
define("LANINS_117", "網站的個性化設定");
define("LANINS_118", "安裝外掛程式");
define("LANINS_119", "安裝佈景主題可能需要的所有外掛");
define("LANINS_120", "八");
define("LANINS_121", "e107_config.php 並不是一個空白的檔案");
define("LANINS_122", "可能有另一個安裝程序存在");
define("LANINS_123", "選擇性: Your public name or alias. Leave blank to use the user name");
define("LANINS_124", "請選擇一個至少8個字元的密碼");
define("LANINS_125", "e107 已經成功安裝");
define("LANINS_126", "基於安全理由，您應該將 e107_config.php 的檔案屬性設定為 644。( CHMOD 644)");
define("LANINS_127", "資料庫 [x] 已經存在，是否覆寫? (現存的資料將完全遺失)");
define("LANINS_128", "覆寫");
define("LANINS_129", "找不到資料庫");
define("LANINS_134", "安裝程序");
define("LANINS_135", "之");
define("LANINS_136", "刪除已存在的資料庫");
define("LANINS_137", "發現已存在的資料庫");
define("LANINS_141", "請在开方表單填入您MySQL的詳細資料。如果您不知道，請聯絡您的架站主機供應商。");
define("LANINS_142", "重要事項!!!請變更 e107.htaccess 檔名為 .htaccess");
define("LANINS_144", "重要事項!!!請複製  [b]e107.htaccess[/b] 中的內容，然後貼在 您的 [b].htaccess[/b] 檔案之中，並小心不要覆蓋到原本已有的內容。");
define("LANINS_145", "e107 v2.x 要求必須安裝  PHP [x] 。. 請聯絡您的主機廠商或繼續安裝之前閱讀這個訊息。");


?>