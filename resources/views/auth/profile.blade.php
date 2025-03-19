<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <!-- Ajouter Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <h1>Bienvenue {{ auth()->user()->username }}</h1>

        <p><strong>Email :</strong> {{ auth()->user()->email }}</p>
        <p><strong>Bio :</strong> {{ auth()->user()->bio ?? 'Aucune bio' }}</p>

        @if(auth()->user()->profile_picture)
            <div class="profile-picture-container">
                <p><strong>Photo de profil :</strong></p>
                <div class="profile-picture-wrapper">
                    <img src="{{ asset('storage/' . auth()->user()->profile_picture) }}" alt="Profile Picture" class="profile-picture" width="150">
                    <!-- Icône de changement de photo -->
                    <label for="profile_picture" class="file-input-icon">
                        <i class="fas fa-camera"></i> <!-- Icône d'appareil photo -->
                    </label>
                </div>
            </div>
        @else
            <p>Aucune photo de profil</p>
        @endif

        <form method="POST" action="{{ route('update.submit') }}" enctype="multipart/form-data">
            @csrf
            <textarea name="bio" id="bio" placeholder="Mettre à jour votre bio"></textarea>
            <div class="file-input-container">
                <input type="file" name="profile_picture" id="profile_picture" accept="image/*">
            </div>
            <button type="submit">Mettre à jour</button>
        </form>

        <a href="{{ route('logout') }}" class="logout-link">Se déconnecter</a>
    </div>
</body>
</html>
