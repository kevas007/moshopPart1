<div class="mt-10">
    <div class="mt-10">
        <h1 class="mt-10">
            ALL SHOPS
        </h1>
        <template>
            <v-container class="mt-10">

                <v-row>
                    @foreach ($magasins as $item)
                        <v-col>
                            <v-card class="mt-10 mx-auto" max-width="344" outlined>
                                <v-list-item three-line>
                                    <v-list-item-content>
                                        {{-- <div class="text-overline mb-4">
          OVERLINE
        </div> --}}
                                        <v-list-item-title class="text-h5 mb-1">
                                            {{ $item->user->firstname }}
                                        </v-list-item-title>
                                        <v-list-item-subtitle>{{ $item->name }}</v-list-item-subtitle>
                                    </v-list-item-content>

                                    {{-- <v-list-item-avatar
        tile
        size="80"
        color="grey"
      ></v-list-item-avatar> --}}
                                </v-list-item>

                                <v-card-actions>
                                    <v-btn href="/magasin/ {{$item->id }}" outlined rounded text>
                                        Visit
                                    </v-btn>
                                </v-card-actions>
                            </v-card>
                    @endforeach
                    </v-col>
                </v-row>
            </v-container>
        </template>

    </div>

</div>
