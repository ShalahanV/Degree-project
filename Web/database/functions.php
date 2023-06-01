<?php
    function get_organizers_all() {
      global $db;
      $organizers=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=1");
      return $organizers;
  }

    function get_carpets_all() {
      global $db;
      $carpets=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=2");
      return $carpets;
  }

    function get_photokeychains_all() {
      global $db;
      $photokeychains=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=3");
      return $photokeychains;
  }

    function get_wallets_all() {
      global $db;
      $wallets=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=4");
      return $wallets;
  }

    function get_belts_all() {
      global $db;
      $belts=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=5");
      return $belts;
  }

    function get_bags_all() {
      global $db;
      $bags=$db->query("SELECT accessories.name_accessory,accessories.img_accessory,accessories.id_category,materials.name_material,accessories.width,accessories.length,accessories.height,accessories.price,categories.name_category  FROM accessories LEFT JOIN materials ON accessories.id_material=materials.id_material LEFT JOIN categories ON accessories.id_category=categories.id_category WHERE accessories.id_category=6");
      return $bags;
  }

    function get_news_all() {
      global $db;
      $news=$db->query("SELECT news.id_new,date_format(`time`,'%d'),months.name_month,months.short_name_month,news.name,date_format(`time`,'%H:%i'),news.point_one,news.point_two,colors.news_class,news.text FROM news  LEFT JOIN months ON news.id_month=months.id_month LEFT JOIN colors ON news.id_color_name=colors.id_color ORDER BY `time` DESC");
      return $news;
  }
    
?>