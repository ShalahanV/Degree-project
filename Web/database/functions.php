<?php
    //Отримання даних з таблиці про органайзери
    function get_organizers_all() {
      global $db;
      $organizers=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=1");
      return $organizers;
    }

    //про килими
    function get_carpets_all() {
      global $db;
      $carpets=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=2");
      return $carpets;
    }

    //про фотобрелки
    function get_photokeychains_all() {
      global $db;
      $photokeychains=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=3");
      return $photokeychains;
    }

    //про портмоне
    function get_wallets_all() {
      global $db;
      $wallets=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=4");
      return $wallets;
    }

    //про ремні
    function get_belts_all() {
      global $db;
      $belts=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=5");
      return $belts;
    }

    //про сумки
    function get_bags_all() {
      global $db;
      $bags=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category,accessories.more_details 
              FROM accessories 
              LEFT JOIN materials ON accessories.id_material=materials.id_material 
              LEFT JOIN categories ON accessories.id_category=categories.id_category 
              WHERE accessories.id_category=6");
      return $bags;
    }

    //Отримання даних про новини з таблиці
    function get_news_all() {
      global $db;
      $news=$db->query("SELECT news.id_new,date_format(`time`,'%d'),months.name_month,months.short_name_month,news.name,date_format(`time`,'%H:%i'),news.point_one,news.point_two,colors.news_class,news.text 
              FROM news 
              LEFT JOIN months ON news.id_month=months.id_month 
              LEFT JOIN colors ON news.id_color_name=colors.id_color 
              ORDER BY `time` DESC");
      return $news;
    }

    //Пошук за заголовками і вмісту
    function searchInTitleAndContent($text) {
      $text = trim(strip_tags($text)); // Видалення зайвих пробілів і HTML-тегів
      global $db;
      $sql = "SELECT c.*, m.*, a.*
              FROM accessories AS a
              LEFT JOIN categories AS c ON a.id_category=c.id_category
              LEFT JOIN materials AS m ON a.id_material=m.id_material
              WHERE a.name_accessory LIKE :text OR a.content LIKE :text OR a.id_category IN (SELECT id_category FROM categories WHERE name_category LIKE :text) OR a.id_material IN (SELECT id_material FROM materials WHERE name_material LIKE :text)";
      $query = $db->prepare($sql);
      $query->execute(['text' => "%$text%"]);
      return $query->fetchAll();
    } 
    
?>