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
?>