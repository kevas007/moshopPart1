@if (!$paniers->isEmpty())
<v-container class="mt-10">

    <v-row>

        @foreach ($paniers as $item)
            <v-col>
                <v-card class="mx-auto my-12" max-width="374">
                    <template v-slot:progress>
                        <v-progress-linear color="deep-purple" height="10" indeterminate></v-progress-linear>
                    </template>

                    <v-img height="250" src="/storage/{{ $item->produit->cover_path }}"></v-img>

                    <v-card-title>{{ $item->produit->name }}</v-card-title>

                    <v-card-text>


                        <div class="my-4 text-subtitle-1">
                            $ • {{ $item->produit->price }}
                        </div>

                        <div>
                            {{ $item->produit->description }}
                        </div>
                        <div>
                            Quantity: {{ $item->quantity }}
                        </div>
                    </v-card-text>

                    <v-divider class="mx-4"></v-divider>


                    <v-card-actions class="flex justify-space-between">


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
