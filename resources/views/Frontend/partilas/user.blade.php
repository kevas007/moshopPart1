<v-form class="mt-10" method="POST" action="{{ '/user/' . $edit->id }}"  enctype="multipart/form-data"  v-model="valid" lazy-validation>
    @csrf
    @method('PUT')
    <v-text-field value="{{ $edit->firstname }}" name="firstname" :counter="255" :rules="nameRules" label="Name" required>
    </v-text-field>
    <v-text-field value="{{ $edit->lastname }}" name="lastname" :counter="255" :rules="nameRules" label="Name" required>
    </v-text-field>



    <v-file-input :rules="fileRules" label="File" prepend-icon="mdi-camera" value="{{ $edit->picture_path }}"
        name="picture_path" truncate-length="15"></v-file-input>


    <v-btn  color="success" type="submit" class="mr-4">
        Validate
    </v-btn>


</v-form>
