<!DOCTYPE html>
<html>
<head>
	<title>Zeichentabelle</title>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<style type="text/css">
		body, th, td {
			font-family: monospace;
		}
		th {
			background-color: #ccc;
		}
		td { 
			border: 1px solid #ccc;
			padding: 3px 10px;
			text-align: right;
		}
		tr:hover {
			background-color: #eee;
		}
		
		table.first {
			float: left;
		}
		
		table.second {
			font-size: 2.8em;
		}
		table.second td {
			text-align: center;
		}
	</style>
</head>
<body>

<table class="first">
	<tr>
		<th>CHR</th>
		<th>RAW</th>
		<th>HTML</th>
		<th>HEX</th>
		<th>URL</th>
	</tr>
	<?php
		for( $i = 0 ; $i < 255; $i++ ) {
			echo '<tr>';
				echo '<td>', $i, '</td>';
				echo '<td>', utf8_encode(htmlentities(chr($i))), '</td>';
				echo '<td>', utf8_encode(htmlspecialchars(htmlentities(chr($i)))), '</td>';
				echo '<td>', dechex($i), '</td>';
				echo '<td>', strtolower(rawurlencode(chr($i))), '</td>';
			echo '</tr>', "\n";
		}
	?>
</table>

<table class="second">
	<tr>
		<th colspan="5">UTF8 Signs</th>
	</tr>
	<tr>
		<td title="Love">♥</td>
		<td bgcolor="#E4E4E4" title="Airplane, travel, going to, high">✈</td>
		<td title="Happy">☺</td>
		<td bgcolor="#E4E4E4" title="Music, sing, happy">♬</td>
		<td title="Check, okay, done, todo">☑</td>
	</tr>
	<tr>
		<td>♠</td>
		<td bgcolor="#E4E4E4">☎</td>
		<td>☻</td>
		<td bgcolor="#E4E4E4">♫</td>
		<td>☒</td>
	</tr>
	<tr>
		<td>♤</td>
		<td bgcolor="#E4E4E4">☤</td>
		<td>☹</td>
		<td bgcolor="#E4E4E4">♪</td>
		<td>♀</td>
	</tr>
	<tr>
		<td>✩</td>
		<td bgcolor="#E4E4E4">✉</td>
		<td>☠</td>
		<td bgcolor="#E4E4E4">✔</td>
		<td>♂</td>
	</tr>
	<tr>
		<td>★</td>
		<td bgcolor="#E4E4E4">✇</td>
		<td>♺</td>
		<td bgcolor="#E4E4E4">✖</td>
		<td>♨</td>
	</tr>
	<tr>
		<td>❦</td>
		<td bgcolor="#E4E4E4">☁</td>
		<td>✌</td>
		<td bgcolor="#E4E4E4">♛</td>
		<td>❁</td>
	</tr>
	<tr>
		<td>☪</td>
		<td bgcolor="#E4E4E4">☂</td>
		<td>✏</td>
		<td bgcolor="#E4E4E4">♝</td>
		<td>❀</td>
	</tr>
	<tr>
		<td>☭</td>
		<td bgcolor="#E4E4E4">☃</td>
		<td>☛</td>
		<td bgcolor="#E4E4E4">♞</td>
		<td>✿</td>
	</tr>
	<tr>
		<td>☮</td>
		<td bgcolor="#E4E4E4">☼</td>
		<td>☚</td>
		<td bgcolor="#E4E4E4">♘</td>
		<td>✾</td>
	</tr>
	<tr>
		<td>☯</td>
		<td bgcolor="#E4E4E4">☾</td>
		<td>☝</td>
		<td bgcolor="#E4E4E4">♖</td>
		<td>✽</td>
	</tr>
	<tr>
		<td>✝</td>
		<td bgcolor="#E4E4E4">☄</td>
		<td>☟</td>
		<td bgcolor="#E4E4E4">♟</td>
		<td>✺</td>
	</tr>
	<tr>
		<td>☥</td>
		<td bgcolor="#E4E4E4">✂</td>
		<td>✍</td>
		<td bgcolor="#E4E4E4">♕</td>
		<td>✵</td>
	</tr>
	<tr>
		<td title="Love">☉</td>
		<td bgcolor="#E4E4E4" title="Airplane, travel, going to, high">☇</td>
		<td title="Happy">☈</td>
		<td bgcolor="#E4E4E4" title="Music, sing, happy">☡</td>
		<td title="Check, okay, done, todo">✠</td>
	</tr>
	<tr>
		<td>☊</td>
		<td bgcolor="#E4E4E4">☋</td>
		<td>☌</td>
		<td bgcolor="#E4E4E4">☍</td>
		<td>♁</td>
	</tr>
	<tr>
		<td>✇</td>
		<td bgcolor="#E4E4E4">☢</td>
		<td>☣</td>
		<td bgcolor="#E4E4E4">✣</td>
		<td>✡</td>
	</tr>
	<tr>
		<td>☞</td>
		<td bgcolor="#E4E4E4">☜</td>
		<td>✜</td>
		<td bgcolor="#E4E4E4">✛</td>
		<td>❥</td>
	</tr>
	<tr>
		<td>♈</td>
		<td bgcolor="#E4E4E4">♉</td>
		<td>♊</td>
		<td bgcolor="#E4E4E4">♋</td>
		<td>♌</td>
	</tr>
	<tr>
		<td>♍</td>
		<td bgcolor="#E4E4E4">♎</td>
		<td>♏</td>
		<td bgcolor="#E4E4E4">♐</td>
		<td>♑</td>
	</tr>
	<tr>
		<td>♒</td>
		<td bgcolor="#E4E4E4">♓</td>
		<td>☬</td>
		<td bgcolor="#E4E4E4">☫</td>
		<td>☨</td>
	</tr>
	<tr>
		<td>☧</td>
		<td bgcolor="#E4E4E4">☦</td>
		<td>✁</td>
		<td bgcolor="#E4E4E4">✃</td>
		<td>✄</td>
	</tr>
	<tr>
		<td>✎</td>
		<td bgcolor="#E4E4E4">✐</td>
		<td>❂</td>
		<td bgcolor="#E4E4E4">❉</td>
		<td>❆</td>
	</tr>
	<tr>
		<td>♅</td>
		<td bgcolor="#E4E4E4">♇</td>
		<td>♆</td>
		<td bgcolor="#E4E4E4">♙</td>
		<td>♟</td>
	</tr>
	<tr>
		<td>♔</td>
		<td bgcolor="#E4E4E4">♕</td>
		<td>♖</td>
		<td bgcolor="#E4E4E4">♗</td>
		<td>♘</td>
	</tr>
	<tr>
		<td>♚</td>
		<td bgcolor="#E4E4E4">♛</td>
		<td>♜</td>
		<td bgcolor="#E4E4E4">♝</td>
		<td>♞</td>
	</tr>
	<tr>
		<td title="Love">©</td>
		<td bgcolor="#E4E4E4" title="Airplane, travel, going to, high">®</td>
		<td title="Trademark">™</td>
		<td bgcolor="#E4E4E4" title="Music, sing, happy">…</td>
		<td title="Check, okay, done, todo">∞</td>
	</tr>
	<tr>
		<td>¥</td>
		<td bgcolor="#E4E4E4">€</td>
		<td>£</td>
		<td bgcolor="#E4E4E4">ƒ</td>
		<td>$</td>
	</tr>
	<tr>
		<td>≤</td>
		<td bgcolor="#E4E4E4">≥</td>
		<td>∑</td>
		<td bgcolor="#E4E4E4">«</td>
		<td>»</td>
	</tr>
	<tr>
		<td>ç</td>
		<td bgcolor="#E4E4E4">∫</td>
		<td>µ</td>
		<td bgcolor="#E4E4E4">◊</td>
		<td>ı</td>
	</tr>
	<tr>
		<td>∆</td>
		<td bgcolor="#E4E4E4">Ω</td>
		<td>≈</td>
		<td bgcolor="#E4E4E4">*</td>
		<td>§</td>
	</tr>
	<tr>
		<td>•</td>
		<td bgcolor="#E4E4E4">¶</td>
		<td>¬</td>
		<td bgcolor="#E4E4E4">†</td>
		<td>&amp;</td>
	</tr>
	<tr>
		<td>¡</td>
		<td bgcolor="#E4E4E4">¿</td>
		<td>ø</td>
		<td bgcolor="#E4E4E4">å</td>
		<td>∂</td>
	</tr>
	<tr>
		<td>œ</td>
		<td bgcolor="#E4E4E4">Æ</td>
		<td>æ</td>
		<td bgcolor="#E4E4E4">π</td>
		<td>ß</td>
	</tr>
	<tr>
		<td>÷</td>
		<td bgcolor="#E4E4E4">‰</td>
		<td>√</td>
		<td bgcolor="#E4E4E4">≠</td>
		<td>%</td>
	</tr>
	<tr>
		<td>˚</td>
		<td bgcolor="#E4E4E4">ˆ</td>
		<td>˜</td>
		<td bgcolor="#E4E4E4">˘</td>
		<td>¯</td>
	</tr>
	<tr>
		<td>∑</td>
		<td bgcolor="#E4E4E4">º</td>
		<td>—</td>
		<td bgcolor="#E4E4E4">‽</td>
		<td>⌨</td>
	</tr>

	<tr>
		<td>⊕</td>
		<td bgcolor="#E4E4E4">⊖</td>
		<td>⊗</td>
		<td bgcolor="#E4E4E4">⊘</td>
		<td>⊙</td>
	</tr>
	<tr>
		<td>⊝</td>
		<td bgcolor="#E4E4E4">⊚</td>
		<td>⊛</td>
		<td bgcolor="#E4E4E4">⊜</td>
		<td>⌚</td>
	</tr>
	<tr>
		<td>⊟</td>
		<td bgcolor="#E4E4E4">⊡</td>
		<td>⊞</td>
		<td bgcolor="#E4E4E4">⊠</td>
	</tr>
	<tr>
		<td>←</td>
		<td bgcolor="#E4E4E4">↑</td>
		<td>→</td>
		<td bgcolor="#E4E4E4">↓</td>
	</tr>

	<tr>
		<td>①</td>
		<td bgcolor="#E4E4E4">②</td>
		<td>③</td>
		<td bgcolor="#E4E4E4">④</td>
		<td>⑤</td>
	</tr>
	<tr>
		<td>⑥</td>
		<td bgcolor="#E4E4E4">⑦</td>
		<td>⑧</td>
		<td bgcolor="#E4E4E4">⑨</td>
		<td>⑩</td>
	</tr>


</table>


</body>
</html>
