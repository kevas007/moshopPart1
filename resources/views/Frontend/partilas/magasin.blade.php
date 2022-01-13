<div class="mt-10">
    {{-- <v-btn class="mt-10" href="/shop">
        Create a new product
    </v-btn> --}}
</div>
{{-- @if(!$show->isEmpty()) --}}

<v-container class="mt-10">
{{-- {{ dd($show) }} --}}
    <v-row >

@foreach ($show as $item)
<v-col>
<v-card class="mx-auto my-12" max-width="374">
<template v-slot:progress>
<v-progress-linear color="deep-purple" height="10" indeterminate></v-progress-linear>
</template>

<v-img height="250" src="/storage/{{ $item->cover_path }}"></v-img>

<v-card-title>{{ $item->name }}</v-card-title>

<v-card-text>
{{-- <v-row class="mx-0">
    <v-rating :value="4.5" color="amber" dense half-increments readonly size="14"></v-rating>
    <div class="grey--text ms-4">
4.5 (413)
</div>
</v-row> --}}

<div class="my-4 text-subtitle-1">
    $ • {{ $item->price }}
</div>

<div>{{ $item->description }} </div>
</v-card-text>

<v-divider class="mx-4"></v-divider>



<v-card-actions class="flex justify-space-between">
    <v-form  v-if='{{ $item->quantity }} > 0' method="POST" action="/panier/{{ $item->id }}">
        @csrf
    <v-text-field
    label="Quantity"
    {{-- value="price" --}}
  name="quantity"
    type="number"
    min="1"
    max="{{ $item->quantity }}"
    value="{{ $item->quantity }}"
  ></v-text-field>


<v-btn
type="submit"
color="deep-purple lighten-2" text>
    Add
</v-btn>
</v-form>
<div v-else>
    <p>
        Out of stock
    </p>
</div>

</v-card-actions>
</v-card>
</v-col>
@endforeach

</v-row>
</v-container>

{{-- @else
<div  class="mt-10">


    <h1>
        Aucun produit trouvé
    </h1>
</div>
@endif --}}
