<div class="mt-10">
    <template class="mt-10">
        <v-simple-table class="mt-10">
            <template v-slot:default>
                <thead>
                    <tr>
                        <th class="text-left">
                            id
                        </th>
                        <th class="text-left">
                            Date
                        </th>
                        <th class="text-left">
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($commandes as $item)
                        <tr>
                            <td>{{ $item->id }}</td>
                            <td>{{ $item->date }}</td>
                            <td>
                              <v-btn href="/commande/{{ $item->id }}">
                                  More
                                <v-icon>mdi-eye</v-icon>
                              </v-btn>
                        </tr>
                    @endforeach
                </tbody>
            </template>
        </v-simple-table>
    </template>

</div>
