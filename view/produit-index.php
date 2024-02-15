{{ include('header.php') }}
<main>
    <span class="error">{{ errors | raw }}</span>
    </span>
    <h1>Fait main, avec amour</h1>
    <div>
    {% for produit in produits %}
        <section>
            <img src="{{path}}view/uploads/{{ produit.image }}" alt="image_accessoire">
            <div class="produit">
                <!-- <p>Type : {{ produit.type }}</p> -->
                <p>Description : {{ produit.description }}</p>
                <!-- <p>Material :
                    {% for material in materials %}
                        {% if material.id_material == produit.id_material %}
                            {{ material.description }}
                        {% endif %}    
                    {% endfor %}
                </p> -->
                <p>Prix : {{ produit.prix }} CAD</p>
                <!-- <p>Quantité : {{ produit.quantite }}</p>                -->
                <a target=_blank href="{{path}}produit/show/{{ produit.id_produit }}">Voir les détails</a>
            </div>
        </section>
    {% endfor %}
    </div>
    <br>
    <a href="{{path}}produit/create">Insérer un nouveau produit</a>
</main>
{{ include('footer.php') }}