<!DOCTYPE html>
<html>
<head>
  <title>Category Page Design</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.2/css/bootstrap.min.css">
  <style>
    /* Custom styles */
    .category-header {
      background-color: #f8f9fa;
      padding: 20px;
      text-align: center;
      margin-bottom: 30px;
    }
    
    .category-title {
      font-size: 30px;
      margin-bottom: 10px;
    }
    
    .category-description {
      font-size: 18px;
      color: #777;
    }
    
    .search-container {
      text-align: center;
      margin-bottom: 30px;
    }
    
    .search-input {
      width: 300px;
      padding: 10px;
    }
    
    .search-button {
      background-color: #007bff;
      color: #fff;
      border: none;
      padding: 10px 20px;
    }
    
    .category-item {
      background-color: #fff;
      border: 1px solid #dee2e6;
      padding: 20px;
      margin-bottom: 20px;
    }
    
    .category-item-title {
      font-size: 24px;
      margin-bottom: 10px;
    }
    
    .category-item-description {
      color: #777;
      margin-bottom: 20px;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="category-header">
      <h1 class="category-title">Category Name</h1>
      <p class="category-description">Explore our collection of items in this category.</p>
    </div>
    
    <div class="search-container">
      <input type="text" class="search-input" placeholder="Search">
      <button class="search-button">Search</button>
    </div>
    
    <div class="row">
      <div class="col-md-6">
        <div class="category-item">
          <h2 class="category-item-title">Item 1</h2>
          <p class="category-item-description">Description of Item 1</p>
          <button class="category-item-button">View Details</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="category-item">
          <h2 class="category-item-title">Item 2</h2>
          <p class="category-item-description">Description of Item 2</p>
          <button class="category-item-button">View Details</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="category-item">
          <h2 class="category-item-title">Item 3</h2>
          <p class="category-item-description">Description of Item 3</p>
          <button class="category-item-button">View Details</button>
        </div>
      </div>
      <div class="col-md-6">
        <div class="category-item">
          <h2 class="category-item-title">Item 4</h2>
          <p class="category-item-description">Description of Item 4</p>
          <button class="category-item-button">View Details</button>
        </div>
      </div>
    </div>
  </div>
  
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap
