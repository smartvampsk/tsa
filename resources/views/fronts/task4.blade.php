@extends('layouts.app')
@section('title', 'Task Four')

@section('content')
    <section>
        <div class="p-4 bg-light">
            <div id="unique"></div>
            <br>
            <div id="asc"></div>
            <br>
            <div id="max"></div>
            <br>
            <div id="sum"></div>
            <br>
            <div id="second_max"></div>
        </div>
        <div class="mt-3 p-3 bg-light text--primary font-semibold">
            <span class="">Data are also displayed in console</span>
        </div>
    </section>
@endsection

@push('scripts')
    <script>
        let items = [7, 4, 8, 10, 1, 2, 2, 3, 4]

        // Write a script to return an array with unique value.
        function uniqueValue(value, index, self) {
            return self.indexOf(value) === index
        }

        let unique = items.filter(uniqueValue)
        console.log('Unique: ', unique)
        $('#unique').append('Unique: ', arrayView(unique));

        // Write a script to return an array with ascending order value.
        let asc = items.sort((a, b) => a - b)
        console.log('Ascending order: ', asc)
        $('#asc').append('Ascending Order: ', arrayView(asc))


        // Write a script to return max value from the array.
        let max = Math.max.apply(null, items)
        console.log('Maximum value: ', max)
        $('#max').append('Maximum Value: ', max)


        // Write a script to return the sum of the array values.
        let sum = items.reduce((a, b) => a + b)
        $('#sum').append('Sum: ', sum)
        console.log('Sum: ', sum)


        // Write a script to find the second max value of the array.
        items.splice(items.indexOf(max), 1);
        let second_max = Math.max.apply(null, items)
        $('#second_max').append('Second Maximum: ', second_max)
        console.log('Second Max: ', second_max)

        function arrayView(array) {
            let data = '[';
            array.forEach(function (value, index) {
                data += value
                data += (index + 1 < array.length) ? ', ' : ''
            })
            data += ']'
            return data
        }
    </script>
@endpush
