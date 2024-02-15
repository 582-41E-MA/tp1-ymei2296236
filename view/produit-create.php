{{ include('header.php') }}
<main>
<h1>Inserez les Informations de Votre Produit</h1>
    <form action="{{path}}produit/store" method="post" enctype="multipart/form-data">
        <span class="error">{{ errors | raw }}</span>
        <label>Type
            <select name="type">
                <option value="Collier">Collier</option>
                <option value="Boucle">Boucle d'oreille</option>
            </select>
        </label>
        <label>Description
            <input type="text" name="description">
        </label>
        <label>Prix
            <input type="number" name="prix">
        </label>
        <label>Material
        <select name="id_material" >
                {% for material in materials %}
                    <option value="{{ material.id_material}}">{{ material.description }}</option>
                {% endfor %}
            </select>
        </label>
        <label>Quantité :
            <input type="number" name="quantite"  value="{{ produit.quantite }}">
        </label>
        <label>Image
            <input type="file" name="image" id="fileToUpload">
        </label>
        <input type="hidden" value="Upload Image" name="submit">
        <input type="submit" value="Enregistrer">
    </form>
</main>
{{ include('footer.php') }}