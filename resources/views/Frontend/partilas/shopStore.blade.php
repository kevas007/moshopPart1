<div class="mt-10">
    <v-form class="mt-10" method="POST" action="{{ '/shop'  }}"  enctype="multipart/form-data"  v-model="valid" lazy-validation>
        @csrf

        <v-text-field
        {{-- value="name " --}}
        name="name" :counter="255" :rules="nameRules" label="Name" required>
        </v-text-field>

        <v-textarea
        name="description"
        filled
        label="Label"
        auto-grow
        {{-- value="description" --}}
        required
      ></v-textarea>
      <v-text-field
      label="Price"
      {{-- value="price" --}}
    name="price"
      prefix="$"
    ></v-text-field>
      <v-text-field
      label="Quantity"
      {{-- value="quantity" --}}
    name="quantity"
      {{-- prefix="$" --}}
    ></v-text-field>


        <v-file-input :rules="fileRules" label="File" prepend-icon="mdi-camera" value="cover_path"
            name="cover_path" truncate-length="15"></v-file-input>



        <v-btn  color="success" type="submit" class="mr-4">
            Validate
        </v-btn>

    </v-form>

</div>
