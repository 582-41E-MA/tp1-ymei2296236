{{ include('header.php') }}
<main>
    <div class="confirmation">
        <h1>Confirmation de la réussite de l'achat</h1>
        <img src="{{path}}view/uploads/{{ produit.image }}" alt="image_accessoire">
        <p>Vous avez payé avec succès !</p>
        <p>Merci beaucoup pour vos achats!</p>
    </div>
</main>
{{ include('footer.php') }}