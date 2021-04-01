<p><img src="https://oldbarberchair.com.ar/assets/logo.png" alt="" width="114" height="114" />
<table style="width: 100%; border-collapse: collapse;" border="0">
    <tbody>
        <tr>
            <td style="width: 100%;">
                <p>&nbsp;</p>
                <p>Hola, <strong>{{ $client->name }}</strong>!</p>
                <p>Acabas de canjear <strong>{{ $product->point }}</strong> puntos, te queda un total de
                    <strong>{{ $client->total_points }}</strong></p>
                <p>Presenta el siguiente QR al barbero para que se haga efectivo tu canje.</p>
                <p>&nbsp;</p>
            </td>
        </tr>
        <tr>
            <td style="width: 100%; text-align: center;">
                <p>&nbsp;</p>
                <p>el codigo es: {{ $client->id . $code }}</p>
                <p>&nbsp;</p>
            </td>
        </tr>
    </tbody>
</table>
<table style="width: 100%; border-collapse: collapse;" border="0">
    <tbody>
        <tr>
            <td style="width: 100%; text-align: center;">
                <p>&nbsp;</p>
                <p><span style="color: #ff0000;"><strong>Gracias por utilizar el sistemas de puntos de Old Barber Chair,
                            te esperamos pronto por la barber&iacute;a.</strong></span></p>
                <p>&nbsp;</p>
            </td>
        </tr>
    </tbody>
</table>