
<template>
    <v-app id="inspire">
        <v-main>
            <v-container fluid >
                <p>
                    <!-- Shop de :    {{ laraveldata[0].magasin_name }} -->
                    </p>
                <v-row >

                    <v-col v-for="item in laraveldata" :key="item.id" class="ml-5 mr-5">

                <v-card  :loading="loading" class="mx-auto my-12" max-width="374">

                    <template v-slot:progress>
                        <v-progress-linear color="deep-purple" height="10" indeterminate></v-progress-linear>
                    </template>

                    <v-img height="250" :src="'/storage/'+ item.produit_cover_path"></v-img>

                    <v-card-title>{{item.produit_name}}</v-card-title>

                    <v-card-text>
                        <!-- <v-row align="center" class="mx-0">
                            <v-rating
                                :value="4.5"
                                color="amber"
                                dense
                                half-increments
                                readonly
                                size="14"
                            ></v-rating>

                            <div class="grey--text ms-4"></div>
                        </v-row> -->

                        <div class="my-4 text-subtitle-1">$ • {{ item.produit_price }}</div>

                        <div>{{ item.produit_description }}</div>
                          <div> Quantity:  {{ item.produit_quantity }}</div>

                    </v-card-text>

                    <v-divider class="mx-4"></v-divider>
                      
                    <!-- <v-card-title>Tonight's availability</v-card-title> -->

                    <!-- <v-card-text>
                        <v-chip-group
                            v-model="selection"
                            active-class="deep-purple accent-4 white--text"
                            column
                        >
                            <v-chip>5:30PM</v-chip>

                            <v-chip>7:30PM</v-chip>

                            <v-chip>8:00PM</v-chip>

                            <v-chip>9:00PM</v-chip>
                        </v-chip-group>
                    </v-card-text> -->

                    <!-- <v-card-actions>
                        <v-btn color="deep-purple lighten-2" text @click="reserve">Reserve</v-btn>
                    </v-card-actions> -->
                </v-card>
                    </v-col>
                </v-row>
            </v-container>
        </v-main>
    </v-app>
</template>

<script>



export default {
    props: {
        laraveldata: {
            type: Array,
            required: true,
            }
        },
    components: {

    },
    data: () => ({
        drawer: false,
        loading: false,
        selection: 1,
    }),
    methods: {
        reserve() {
            this.loading = true

            setTimeout(() => (this.loading = false), 2000)
        },
    },

}

</script>
