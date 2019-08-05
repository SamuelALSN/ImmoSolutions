<style>
    /* Always set the map height explicitly to define the size of the div
 * element that contains the map. */
    #map {
        height: 100%;
    }
    /* Optional: Makes the sample page fill the window. */
    html, body {
        height: 100%;
        margin: 0;
        padding: 0;
    }
</style>
<link type="text/css" rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500">
<style>
    #locationField, #controls {
        position: relative;
        width: 480px;
    }
    #autocomplete {
        position: absolute;
        top: 0px;
        left: 0px;
        width: 99%;
    }
    .label {
        text-align: right;
        font-weight: bold;
        width: 100px;
        color: #303030;
        font-family: "Roboto";
    }
    #address {
        border: 1px solid #000090;
        background-color: #f0f9ff;
        width: 480px;
        padding-right: 2px;
    }
    #address td {
        font-size: 10pt;
    }
    .field {
        width: 99%;
    }
    .slimField {
        width: 80px;
    }
    .wideField {
        width: 200px;
    }
    #locationField {
        height: 20px;
        margin-bottom: 2px;
    }
</style>

<form>
    <div id="locationField">
        <input id="autocomplete"
               placeholder="Enter your address"
               onFocus="geolocate()"
               type="text"/>
    </div>

    <table id="address">
        <tr>
            <td class="label">Street address</td>
            <td class="slimField"><input class="field" id="street_number" disabled="true"/></td>
            <td class="wideField" colspan="2"><input class="field" id="route" disabled="true"/></td>
        </tr>
        <tr>
            <td class="label">City</td>
            <td class="wideField" colspan="3"><input class="field" id="locality" disabled="true"/></td>
        </tr>
        <tr>
            <td class="label">State</td>
            <td class="slimField"><input class="field" id="administrative_area_level_1" disabled="true"/></td>
            <td class="label">Zip code</td>
            <td class="wideField"><input class="field" id="postal_code" disabled="true"/></td>
        </tr>
        <tr>
            <td class="label">Country</td>
            <td class="wideField" colspan="3"><input class="field" id="country" disabled="true"/></td>
        </tr>
    </table>
</form>

@include("guest.myscripts.googlemapskey")
@include("guest.myscripts.locate")

