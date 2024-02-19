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

                <br>             
                {% if produit.quantite != 0 %}

                    {% if produit.id_produit == 1 %}

                    <!-- localhost:8000 -->
                    <!-- <a href="https://buy.stripe.com/test_9AQcN04A2aW2gc8288">Acheter</a> -->

                    <!-- webdev -->
                    <a href="https://buy.stripe.com/test_eVa00e5E64xEgc8005">Acheter</a>


                    {% elseif produit.id_produit == 2 %}

                    <!-- localhost:8000 -->
                    <!-- <a href="https://buy.stripe.com/test_28o14i5E6aW28JGdQX">Acheter</a> -->
                    
                    <!-- webdev -->
                    <a href="https://buy.stripe.com/test_eVabIWfeGaW26By289">Acheter</a>


                    {% elseif produit.id_produit == 3 %}

                    <!-- localhost:8000 -->
                    <!-- <a href="https://buy.stripe.com/test_8wM14iaYq8NU4tq14c">Acheter</a> -->

                    <!-- webdev -->
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