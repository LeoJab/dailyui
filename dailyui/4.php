<?php $prompt="Prompt: Calculation" ?>

<link rel="stylesheet" href="ASSET/css/dailyUi/4.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Alumni+Sans:ital,wght@0,100..900;1,100..900&family=Overpass:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

<div id="all4">
    <div class="mobile">
        <div class="top">
            <p>12:00</p>
            <div class="icons">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-signal-high"><path d="M2 20h.01"/><path d="M7 20v-4"/><path d="M12 20v-8"/><path d="M17 20V8"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-wifi"><path d="M12 20h.01"/><path d="M2 8.82a15 15 0 0 1 20 0"/><path d="M5 12.859a10 10 0 0 1 14 0"/><path d="M8.5 16.429a5 5 0 0 1 7 0"/></svg>
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-battery-medium"><rect width="16" height="10" x="2" y="7" rx="2" ry="2"/><line x1="22" x2="22" y1="11" y2="13"/><line x1="6" x2="6" y1="11" y2="13"/><line x1="10" x2="10" y1="11" y2="13"/></svg>
            </div>
        </div>
        <div class="backMenu">
            <div class="back">
                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-chevron-left"><path d="m15 18-6-6 6-6"/></svg>
                <p>back</p>
            </div>
            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="lucide lucide-align-justify"><line x1="3" x2="21" y1="6" y2="6"/><line x1="3" x2="21" y1="12" y2="12"/><line x1="3" x2="21" y1="18" y2="18"/></svg>
        </div>
        <h1>Calorie Calculator</h1>
        <div class="addIngredient">
            <h2>Add a ingredient</h2>
            <form action="#">
                <div>
                    <select name="ingredient" id="ingredient">
                        <option value="Pasta">Pasta</option>
                        <option value="Tomato">Tomato</option>
                        <option value="Salad">Salad</option>
                        <option value="Rice">Rice</option>
                        <option value="Carrot">Carrot</option>
                        <option value="Beef">Beef</option>
                    </select>
                    <input type="text" name="quantity" id="quantity">
                    <select name="unit" id="unit">
                        <option value="g">g</option>
                        <option value="kg">kg</option>
                    </select>
                </div>
                <button type="submit">Add ingredient</button>
            </form>
        </div>
        <div class="listIngredient">
            <h2>Ingredients List</h2>
            <table>
                <thead>
                    <tr>
                        <th>Name</th>
                        <th>Quantity</th>
                        <th>Unit</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Carrot</td>
                        <td>80</td>
                        <td>g</td>
                    </tr>
                    <tr>
                        <td>Tomato</td>
                        <td>120</td>
                        <td>g</td>
                    </tr>
                    <tr>
                        <td>Salad</td>
                        <td>30</td>
                        <td>g</td>
                    </tr>
                    <tr>
                        <td>Beef</td>
                        <td>200</td>
                        <td>g</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <div class="statsCalorie">
            <h2>Calorie Statistiques</h2>
            <div class="totalGraphique">
                <div class="total">
                    <table>
                        <tbody>
                            <tr>
                                <td>Glucides</td>
                                <td class="glucides">400g</td>
                            </tr>
                            <tr>
                                <td>Lipides</td>
                                <td class="lipides">100g</td>
                            </tr>
                            <tr>
                                <td>Protéines</td>
                                <td class="proteines">100g</td>
                            </tr>
                            <tr>
                                <td>Fibres</td>
                                <td class="fibres">20g</td>
                            </tr>
                            <tr>
                                <td>Calcium</td>
                                <td>0g</td>
                            </tr>
                            <tr>
                                <td>Fer</td>
                                <td>20g</td>
                            </tr>
                            <tr>
                                <td>Sodium</td>
                                <td>30g</td>
                            </tr>
                            <tr>
                                <td>Cholesterol</td>
                                <td>50g</td>
                            </tr>
                            <tr>
                                <td>Magnésium</td>
                                <td>10g</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
                <div class="graphique">
                    <p class="title">Graphique</p>
                    <div>
                        <canvas id="canvas"></canvas>
                    </div>
                </div>
            </div>
            <button>Export data</button>
        </div>
    </div>
</div>

<script>
    var glucides = document.querySelector('.glucides');
    var lipides = document.querySelector('.lipides');
    var proteines = document.querySelector('.proteines');
    var fibres = document.querySelector('.fibres');

    console.log(glucides, lipides, proteines, fibres);

    var config = {
    type: 'doughnut',
    data: {
        datasets: [{
        data: [
            parseInt(glucides.textContent),
            parseInt(lipides.textContent),
            parseInt(proteines.textContent),
            parseInt(fibres.textContent)
        ],
        backgroundColor: [
            'rgb(0, 133, 255)',
            'rgb(255, 230, 0)',
            'rgb(252, 80, 80)',
            'rgb(0, 184, 40)'
        ],
        }],
        labels: [
        "Glucides",
        "Lipides",
        "Protéines",
        "Fibres",
        ]
    }};

    window.onload = function() {
        var canvas = document.querySelector("#canvas");
        var ctx = canvas.getContext("2d");
        window.myPie = new Chart(ctx, config);
    };
</script>