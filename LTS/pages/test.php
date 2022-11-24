<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php
    include ("../partials/pages.head.inc.php");
    ?>
</head>
<body>
    
    <table class="table  table-hover table-borderless table-sm my-4">
      <thead>
        <tr class="">
          <th scope="col">#</th>
          <th scope="col" class="">First Name</th>
          <th scope="col">Second Name</th>
          <th scope="col">Age</th>
        </tr>
      </thead>
      <tbody >
        <tr>
          <td scope="row">1</td>
          <td class="">Terry</td>
          <td>Sharm</td>
          <td>18</td>
        </tr>
        <tr>
          <td scope="row">2</td>
          <td class="">Serry</td>
          <td>Nielson</td>
          <td>22</td>
        </tr>
        <tr>
          <td scope="row">3</td>
          <td class="">Victor</td>
          <td>Maddog</td>
          <td>29</td>
        </tr>
        <tr>
          <td scope="row">4</td>
          <td class="">Phillip</td>
          <td>Core</td>
          <td>25</td>
        </tr>
      </tbody>
    </table>

    <figure class="figure mx-4 ">
      <img src="../images/sky3.jpg" class="figure-img img-fluid rounded" alt="">
      <figcaption class="figure-caption">
        A caption for the above image
      </figcaption>
    </figure>
<div class="container">
<form action="" class="mx-4">
    <div class="row gx-4 mx-4">
      <div class="col-6">
        <div class="form-group">
          <label for="Color">Color</label>
          <input type="color" class="form-control">
        </div>
      </div>

      <div class="col-6">
        <label for="exampleDataList" class="form-label">Datalist Example</label>
        <input type="text" class="form-control" id="exampleDataList" list="datalistOptions" placeholder="Type to search...">
        <datalist id="datalistOptions">
          <option value="Kenya"></option>
          <option value="Uganda"></option>
          <option value="Tanzania"></option>
          <option value="Rwanda"></option>
          <option value="Somalia"></option>
          <option value="Ethiopia"></option>
          <option value="Spain"></option>
          <option value="Japan"></option>
          <option value="China"></option>
          <option value="America"></option>
          <option value="Italy"></option>
          <option value="Congo"></option>
          <option value="Nigeria"></option>
          <option value="Switzerland"></option>
          <option value="Burundi"></option>
          <option value="India"></option>
          <option value="Canada"></option>
          <option value="Germany"></option>
          <option value="South Africa"></option>
          <option value="Sychelles"></option>
          <option value="Egypt"></option>
          <option value="Algeria"></option>
        </datalist>
      </div>
      <div class="col-6">
        <div class="input-group flex-nowrap">
          <span class="input-group-text" id="addon">Small</span>

          <input type="text" class="form-control" placeholder="Username" aria-label="Username" aria-describedby="addon" >
        </div>
      </div>
      <div class="col-6">
        <div class="input-group">
          <span class="input-group-text">$</span>
          <span class="input-group-text">0.00</span>
          <input type="text" class="form-control" aria-label="Dollar amount(with dot and two decimal places)">
        </div>
      </div>
      <div class="col-6 my-4">
        <div class="input-group">
          <span class="input-group-text">First and Last Name</span>
          <input type="text" class="form-control" aria-label="First name">
          <input type="text" class="form-control" aria-label="Last name">
        </div>
      </div>
      <div class="col-6 my-4">
        <div class="input-group">
          <button class="btn btn-outline-success" type="button" id="button-addon1">Button</button>
          <input type="text" class="form-control" aria-label="Exaple text with button addon" aria-describedby="button-addon1">
        </div>
      </div>
      <div class="col-6 my-4">
        <div class="input-group">
          <button class="btn btn-outline-danger dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">Dropdown</button>
          <ul class="dropdown-menu">
            <li><a href="#" class="dropdown-item">Action</a></li>
            <li><a href="#" class="dropdown-item">Another Action</a></li>
            <li><a href="#" class="dropdown-item">More Action</a></li>
            <li><a href="#" class="dropdown-item">Repeated Action</a></li>
            <li><a href="#" class="dropdown-item">Default Action</a></li>
          </ul>

          <input type="text" class="form-control" aria-label="Text with dropdown">
        </div>
      </div>
      <div class="col-6 my-4">
        <div class="form-floating">
          <input type="text" class="form-control" placeholder="Full name..." id="floatinginput">
          <label for="floatinginput">Full name</label>
        </div>
      </div>
    </form>

    <div class="row mx-4">
      <div class="col-12">
        <div class="container">
          <form action="" class="row g3">
            <div class="col-8">
              <div class="form-group">
                <label for="validationServer" class="form-label">First Name</label>
                <input type="text" class="form-control is-valid" id="validationServer02" value="Otto" required>
                <div class="valid-feedback">
                  Looking good!
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label for="validationServer" class="form-label">First Name</label>
                <input type="text" class="form-control is-valid" id="validationServer01" value="Otto" required>
                <div class="valid-feedback">
                  Looking good!
                </div>
              </div>
            </div>
            <div class="col-8">
              <div class="form-group">
                <label for="validationServer" class="form-label">Age</label>
                <input type="text" class="form-control is-valid" id="validationTooltip01" value="Mark" required>
                <div class="valid-feedback">
                  Looking good!
                </div>
              </div>
              <div class="col-12">
                <button class="btn btn-primary" type="submit">Submit Form</button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </div>

    <div class="container m-4 p-4">
        <div class="dropdown">
          <button class="dropdown-toggle btn btn-primary" id="dropDownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false" type="button">Dropdown Button</button>
          <ul class="dropdown-menu" aria-labelledby="dropDownMenuButton1">
            <li><a href="#" class="dropdown-item">Rice</a></li>
            <li><a href="#" class="dropdown-item">Meat</a></li>
            <li><a href="#" class="dropdown-item">Beans</a></li>
            <li><a href="#" class="dropdown-item">Vegtables</a></li>
            <li><a href="#" class="dropdown-item">Fruits</a></li>
            <li><a href="#" class="dropdown-item">Tea</a></li>
          </ul>
        </div>
    </div>
</div>
<?php
include ("../partials/pages.foot.inc.php");
?>
</body>
</html>