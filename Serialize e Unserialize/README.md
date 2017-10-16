<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	Basicamente Serialize é o processo de salvar dados de algo, em algum lugar ou transmiti-lo pela rede, num formato binário eu de texto. Sendo que esses bytes poderão ser utilizados para reconstruir perfeitamente o que foi serializado. Um exemplo muito comum é quando jogamos algo e decidimos dar uma paradinha mas não queremos recomeçar do início, então nós salvamos o progresso pra quando voltarmos estar lá do jeitinho que a gente deixou. No entanto não se pode serializar recursos. Para utilizar esta função em php, colocamos como parâmetro o dado que queremos serializar como um array por exemplo, e então a função retornará uma String ou um dado binário juntando tudo.

	Já Unserialize faz o contrário disso, mandando tudo para o estaod original, ou seja o mesmo array serializado do exemplo será passado como parâmetro na função unserialize e voltará ao formato antigo, antes de ser serializado.

	Isso pode ser utilizado quando se tem algo muito grande a ser efetuado tipo um arquivo com dezenas de classes mas vc não quer ficar executando o mesmo resultado de impressão sempre, então vc utiliza serialize neles para salvar os resultados num arquivo para por exemplo, enviar para alguém e então quando quiser utilizar estes resultados é só dar unserialize nos dados serializados para eles voltarem ao estado original.
</body>
</html>