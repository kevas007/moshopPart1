<v-form class="mt-10" method="POST" action="{{ '/shop/' . $produit->id }}"  enctype="multipart/form-data"  v-model="valid" lazy-validation>
    @csrf
    @method('PUT')
    <v-text-field value="{{ $produit->name }}" name="name" :counter="255" :rules="nameRules" label="Name" required>
    </v-text-field>

    <v-textarea
    name="description"
    filled
    label="Label"
    auto-grow
    value="{{ $produit->description }}"
    required
  ></v-textarea>
  <v-text-field
  label="Price"
  value="{{ $produit->price }}"
name="price"
  prefix="$"
></v-text-field>

    <v-file-input :rules="fileRules" label="File" prepend-icon="mdi-camera" value="{{ $produit->cover_path }}"
        name="cover_path" truncate-length="15"></v-file-input>



    <v-btn  color="success" type="submit" class="mr-4">
        Validate
    </v-btn>


</v-form>
{{-- <p>
    {{ $produit }}
</p> --}}
