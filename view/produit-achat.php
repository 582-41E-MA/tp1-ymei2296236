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
                <label>Quantité :
                <input type="number" name="quantite"  value="0" min="0" max="{{ produit.quantite }}">
                <input type="hidden" name="id_produit" value="{{ produit.id_produit }}">
                </label> 
                <br>             
                {% if produit.quantite != 0 %}
                    <a href="https://buy.stripe.com/test_eVabIWfeGaW26By289">Acheter</a>
                {% else %}
                    <span>Produit indisponible</span>
                {% endif %} 
            </div>
        </section>
    </div>
</main>
{{ include('footer.php') }}

