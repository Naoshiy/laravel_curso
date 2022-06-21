@extends('layouts.main')

@section('title','Material Enter')


@section('content')
    <h1> Material Enter </h1>
    <div id="material_enter" class="col-md-4 offset-md-3">
    <form action="/create" method="POST">
        @csrf
        <div class="form-group">
            <label for="title"> PO Number </label>
            <input type="number" class="form-control" id="po_number" name="po_number">

            <label for="title"> Order Number </label>
            <input type="number" class="form-control" id="order_number" name="order_number">

            <label for="title"> Side Mark </label>
            <input type="text" class="form-control" id="side_mark" name="side_mark">

            <label for="title"> Carrier </label>
            <select id="carrier" name="carrier" class="form-control">
                <option> Select</option>
                <option> A.P.T. Distributing </option>
                <option>Accurate Transport</option>
                <option>AllState</option>
                <option>APT</option>
                <option>Belknap</option>
                <option>Calhoun Distributio</option>
                <option>Carpenter</option>
                <option>Classic Tile</option>
                <option>Couristan Carpets</option>
                <option>Dalyn</option>
                <option>Dedicated LLC</option>
                <option>Dixie</option>
                <option>Elias Wilf</option>
                <option>Engineered</option>
                <option>Fabrica</option>
                <option>Fishman</option>
                <option>JJ Haines</option>
                <option>Kane</option>
                <option>knae</option>
                <option>Mannington</option>
                <option>Masland</option>
                <option>Mohawk</option>
                <option>Nourtex/Nourison RU</option>
                <option>PCC Ringgold</option>
                <option>Phenix</option>
                <option>Shaw</option>
                <option>Southwind</option>
                <option>Stanton</option>
                <option>Stark</option>
                <option>UPS</option>
                <option>Urato</option>
            </select>

            <label for="title"> Roll Number </label>
            <input type="number" class="form-control" id="roll_number" name="roll_number">

            <label for="title"> Width </label>
            <input type="number" class="form-control" id="width" name="width">
            
            <label for="title"> Length </label>
            <input type="number" class="form-control" id="length" name="length">
        
            <label for="title"> Quantity "Sq.Ft" </label>
            <input type="number" class="form-control" id="qnt_sqft" name="qnt_sqft">

            <label for="title"> Material Type </label>
            <select id="material_type" name="material_type" class="form-control">
                <option>Select</option>
                <option> Acessories</option>
                <option> Area Rugs</option>
                <option> Cabinet</option>
                <option> Carpet</option>
                <option> Carpet Tile</option>
                <option> Ceilings</option>
                <option> Ceramic Tile</option>
                <option> Displays</option>
                <option> Fixtures</option>
                <option> Installation Materials</option>
                <option> Laminates</option>
                <option> Pad</option>
                <option> Rubber Tile</option>
                <option> Runner</option>
                <option> Stone</option>
                <option> Training</option>
                <option> Unclassified</option>
                <option> Vinyl</option>
                <option> Vinyl Sheet</option>
                <option> Vinyl Tile</option>
                <option> Wall Base</option>       
                <option> Wall Coverings</option>       
                <option> wood</option>                 
            </select>

            <label for="title"> Store </label>
            <select id="store" name="store" class="form-control">
                <option>Select</option>
                <option> B-Carpets & More East Brunswick</option>
                <option> OB-Carpets & More Old Bridge </option>
                <option> SI-Carpets & More Staten Island</option>
                <option> Warehouse</option>
              
            </select>


            <label for="title"> Description </label>
            <input type="text" class="form-control" id="description" name="Description">
        <br>
            <input class="btn btn-primary" type="submit" value="Submit">
            
        </div>                
    </form>
    </div>

@endsection