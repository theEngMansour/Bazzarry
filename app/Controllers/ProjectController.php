<?php

namespace App\Controllers;
use App\Core\Request;
use App\Database\QueryBuilder;
use App\Traits\ImageUploadTrait;

class ProjectController
{
  // use ImageUploadTrait;

  /*
    * Display a listing of the resource.
  */
  public function index()
  {
    $projects = QueryBuilder::get('projects');
    return view('index', [
      'projects' => $projects
    ]);
  }

  public function admin()
  {
    $projects = QueryBuilder::get('projects');
    return view('admin', [
      'projects' => $projects
    ]);
  }

  /*
    * Show the form for creating a new resource.
  */
  public function create()
  {    
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
    $uploadOk = 1;
    $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

    // Check if image file is a actual image or fake image
    if(isset($_POST["submit"])) {
      $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
      if($check !== false) {
        echo "File is an image - " . $check["mime"] . ".";
        $uploadOk = 1;
      } else {
        echo "File is not an image.";
        $uploadOk = 0;
      }
    }

    // Check if file already exists
    if (file_exists($target_file)) {
      echo "Sorry, file already exists.";
      $uploadOk = 0;
    }

    // Check file size
    if ($_FILES["fileToUpload"]["size"] > 500000) {
      echo "Sorry, your file is too large.";
      $uploadOk = 0;
    }

    // Allow certain file formats
    if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
    && $imageFileType != "gif" ) {
      echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
      $uploadOk = 0;
    }

    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
      echo "Sorry, your file was not uploaded.";
    // if everything is ok, try to upload file
    } else {
      if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file ". htmlspecialchars( basename( $_FILES["fileToUpload"]["name"])). " has been uploaded.";
      } else {
        echo "Sorry, there was an error uploading your file.";
      }
    }
    QueryBuilder::insert('projects', [
        'title'       => $_POST['title'],
        'descr'       => $_POST['descr'],
        'size'        => $_POST['size'],
        'color'       => $_POST['color'],
        'price'       => $_POST['price'],
        'category_id' => $_POST['category_id'],
        'user_id'     => $_POST['user_id'],
        'cover_image' => $target_file,
    ]);

    back();
  }

  /**
   * Display the specified resource.
  */
  public function show()
  {
    $project = QueryBuilder::show('projects', Request::get('id'));
    return view('show', [
      'project' => $project
    ]);
  }

  /*
    * Edit resource in storage.
  */
  public function edit()
  {
    if($id= Request::get('id'))
    $data = QueryBuilder::show('projects', $id);
    return view('edit', [
      'data' => $data
    ]);
  }

  /*
    * Update the specified resource in storage.
  */
  public function update()
  {
    $data = [
      'id'          => $_POST['id'],
      'title'       => $_POST['title'],
      'descr'       => $_POST['descr'],
      'size'        => $_POST['size'],
      'color'       => $_POST['color'],
      'price'       => $_POST['price'],
      'category_id' => $_POST['category_id'],
      'user_id'     => $_POST['user_id'],
    ];

    $id = $data['id'];
    if ($data != null) {
        QueryBuilder::update('projects', $id, $data);
    }
    back();
  }

  /*
    * Remove the specified resource from storage.
  */
  public function destroy()
  {      
    if ($id = Request::get('id')) {
        QueryBuilder::delete('projects', $id);
    }
    back();
  }
}
