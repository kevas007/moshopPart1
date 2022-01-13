@if(!$paniers->isEmpty())
<v-container class="mt-10">
<v-form method='post' action='/commande'>
    @csrf
    <v-btn type="submit" class="mt-10">
        Valider la paniers
    </v-btn>
</v-form>
    <v-row >

@foreach ($paniers as $item)
<v-col>
<v-card class="mx-auto my-12" max-width="374">
<template v-slot:progress>
<v-progress-linear color="deep-purple" height="10" indeterminate></v-progress-linear>
</template>

<v-img height="250" src="/storage/{{ $item->produit->cover_path }}"></v-img>

<v-card-title>{{ $item->produit->name }}</v-card-title>

<v-card-text>
{{-- <v-row class="mx-0">
    <v-rating :value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>
    <div class="grey--text ms-4">
4.5 (413)
</div>
</v-row> --}}

<div class="my-4 text-subtitle-1">
    $ • {{ $item->produit->price }}
</div>

<div>{{ $item->produit->description }} </div>
<div>Quantity: {{ $item->quantity }}</div>
</v-card-text>

<v-divider class="mx-4"></v-divider>



<v-card-actions class="flex justify-space-between">

<v-form method="POST" action="/panier/{{ $item->id }}">
    @csrf
    @method('DELETE')
    <v-btn type="submit" color="red lighten-2" text >
        Delete
    </v-btn>
</v-form>
</v-card-actions>
</v-card>
</v-col>
@endforeach

</v-row>
</v-container>
@else
<v-container class="mt-10">
<v-row >
<v-col>
<v-card class="mx-auto my-12" max-width="374">
<v-card-title>
<h1 class="display-1">Panier vide</h1>
</v-card-title>
</v-card>
</v-col>
</v-row>
</v-container>
@endif
