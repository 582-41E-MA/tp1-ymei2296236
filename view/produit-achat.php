{{ include('header.php') }}
<main>
    <h1>Acheter</h1>
    <div>
        <section>
            <img src="{{path}}view/uploads/{{ produit.image }}" alt="image_accessoire">
            <div class="produit">
                <p>Type : {{ produit.type }}</p>
                <p>Description : {{ produit.description }}</p>
                <p>Material :
                    {% for material in materials %}
                        {% if material.id_material == produit.id_material %}
                            {{ material.description }}
                        {% endif %}    
                    {% endfor %}
                </p>
                <p>Prix : {{ produit.prix }} CAD</p>
                <p>Disponibilité en stock : 
                    {% if produit.quantite == 0 %}
                        En rupture de stock
                    {% else %}
                        {{ produit.quantite }}
                    {% endif %}
                </p> 
                <!-- <label>Quantité :
                <input type="number" name="quantite"  value="0" min="0" max="{{ produit.quantite }}">
                <input type="hidden" name="id_produit" value="{{ produit.id_produit }}">
                </label>  -->
                <br>             
                {% if produit.quantite != 0 %}



                

                

                    {% if produit.id_produit == 1 %}

                    <!-- lien pour tester localhost:8000 (http://localhost:8000/tp1-ymei2296236/produit/achat/1) -->
                    <!-- <a href="https://buy.stripe.com/test_9AQcN04A2aW2gc8288">Acheter</a> -->

                    <!-- lien pour tester localhost:8888(http://localhost:8888/tp1-ymei2296236/produit/achat/1) -->
                    <!-- <a href="https://buy.stripe.com/test_00g28m7Me1lsbVS4gj">Acheter</a> -->

                    <!-- lien pour tester webdev (https://e2296236.webdev.cmaisonneuve.qc.ca/tp1-ymei2296236/produit/achat/1) -->
                    <a href="https://buy.stripe.com/test_eVa00e5E64xEgc8005">Acheter</a>


                    {% elseif produit.id_produit == 2 %}

                    <!-- lien pour tester localhost(http://localhost/tp1-ymei2296236-2/produit/achat/2) -->
                    <!-- <a href="https://buy.stripe.com/test_5kA4gu1nQe8egc8002">Acheter</a> -->
                    
                    <!-- lien pour tester webdev (https://e2296236.webdev.cmaisonneuve.qc.ca/tp1-ymei2296236/produit/achat/2) -->
                    <a href="https://buy.stripe.com/test_eVabIWfeGaW26By289">Acheter</a>


                    {% elseif produit.id_produit == 3 %}
                    
                    <!-- lien pour tester webdev (https://e2296236.webdev.cmaisonneuve.qc.ca/tp1-ymei2296236/produit/achat/3) -->
                    <a href="https://buy.stripe.com/test_8wMeV88Qi0ho0da4gm">Acheter</a>
                    
                    {% endif %} 

                {% else %}
                    <span>Produit indisponible</span>
                {% endif %} 
            </div>
        </section>
    </div>
</main>
{{ include('footer.php') }}