<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/om_SearchOrderNo_Ad.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class OmSearchOrderNoAd
{
    public static $is_initialized = false;

    public static function initOnce() {
        $pool = \Google\Protobuf\Internal\DescriptorPool::getGeneratedPool();

        if (static::$is_initialized == true) {
          return;
        }
        \GPBMetadata\Dstore\Values::initOnce();
        \GPBMetadata\Dstore\Engine\Engine::initOnce();
        $pool->internalAddGeneratedFile(hex2bin(
            "0acf220a326473746f72652f656e67696e652f70726f636564757265732f" .
            "6f6d5f5365617263684f726465724e6f5f41642e70726f746f1221647374" .
            "6f72652e656e67696e652e6f6d5f5365617263684f726465724e6f5f4164" .
            "1a136473746f72652f76616c7565732e70726f746f1a1a6473746f72652f" .
            "656e67696e652f656e67696e652e70726f746f22ba060a0a506172616d65" .
            "74657273122c0a086f726465725f6e6f18012001280b321a2e6473746f72" .
            "652e76616c7565732e537472696e6756616c756512160a0d6f726465725f" .
            "6e6f5f6e756c6c18e9072001280812450a206d61785f706f737369626c65" .
            "5f6f72646572735f7065725f6f726465725f6e6f18022001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565122e0a256d" .
            "61785f706f737369626c655f6f72646572735f7065725f6f726465725f6e" .
            "6f5f6e756c6c18ea072001280812300a0966726f6d5f6461746518032001" .
            "280b321d2e6473746f72652e76616c7565732e54696d657374616d705661" .
            "6c756512170a0e66726f6d5f646174655f6e756c6c18eb07200128081240" .
            "0a1b73686f775f706572736f6e5f63686172616374657269737469637318" .
            "042001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e56" .
            "616c756512290a2073686f775f706572736f6e5f63686172616374657269" .
            "73746963735f6e756c6c18ec072001280812390a14646174655f616e645f" .
            "74696d655f666f726d617418052001280b321b2e6473746f72652e76616c" .
            "7565732e496e746567657256616c756512220a19646174655f616e645f74" .
            "696d655f666f726d61745f6e756c6c18ed072001280812310a0c696e636c" .
            "7564655f74696d6518062001280b321b2e6473746f72652e76616c756573" .
            "2e426f6f6c65616e56616c7565121a0a11696e636c7564655f74696d655f" .
            "6e756c6c18ee072001280812340a0f696e636c7564655f6974656d5f6e6f" .
            "18072001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e" .
            "56616c7565121d0a14696e636c7564655f6974656d5f6e6f5f6e756c6c18" .
            "ef0720012808123b0a166e6f64655f63686172616374657269737469635f" .
            "696418082001280b321b2e6473746f72652e76616c7565732e496e746567" .
            "657256616c756512240a1b6e6f64655f6368617261637465726973746963" .
            "5f69645f6e756c6c18f0072001280812330a0e70757263686173655f6f72" .
            "64657218092001280b321b2e6473746f72652e76616c7565732e426f6f6c" .
            "65616e56616c7565121c0a1370757263686173655f6f726465725f6e756c" .
            "6c18f1072001280822a91a0a08526573706f6e736512380a106d6574615f" .
            "696e666f726d6174696f6e18022003280b321e2e6473746f72652e656e67" .
            "696e652e4d657461496e666f726d6174696f6e12270a076d657373616765" .
            "18032003280b32162e6473746f72652e656e67696e652e4d657373616765" .
            "123c0a03726f7718042003280b322f2e6473746f72652e656e67696e652e" .
            "6f6d5f5365617263684f726465724e6f5f41642e526573706f6e73652e52" .
            "6f771afb180a03526f77120f0a06726f775f696418904e2001280512380a" .
            "136f726465725f646174655f616e645f74696d6518914e2001280b321a2e" .
            "6473746f72652e76616c7565732e537472696e6756616c756512320a0c70" .
            "61796d656e745f636f737418924e2001280b321b2e6473746f72652e7661" .
            "6c7565732e446563696d616c56616c7565123b0a1664656c69766572795f" .
            "646174655f616e645f74696d6518934e2001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512370a116e65745f73686970" .
            "70696e675f636f737418944e2001280b321b2e6473746f72652e76616c75" .
            "65732e446563696d616c56616c7565122d0a086f726465725f6e6f18954e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565122f0a096e6574746f5f73756d18964e2001280b321b2e6473746f72" .
            "652e76616c7565732e446563696d616c56616c7565123c0a166c6173745f" .
            "6564697465645f62795f757365725f696418974e2001280b321b2e647374" .
            "6f72652e76616c7565732e496e746567657256616c7565122e0a086f7264" .
            "65725f696418984e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512300a0a62727574746f5f73756d18994e2001" .
            "280b321b2e6473746f72652e76616c7565732e446563696d616c56616c75" .
            "65123f0a19707265636973655f6e65745f7368697070696e675f636f7374" .
            "189a4e2001280b321b2e6473746f72652e76616c7565732e446563696d61" .
            "6c56616c756512410a1c6368617261635f76616c325f72657374725f6279" .
            "5f7061747465726e189b4e2001280b321a2e6473746f72652e76616c7565" .
            "732e537472696e6756616c7565122d0a076e65745f73756d189c4e200128" .
            "0b321b2e6473746f72652e76616c7565732e446563696d616c56616c7565" .
            "122f0a09706572736f6e5f6964189d4e2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565123d0a187061796d656e74" .
            "5f747970655f6465736372697074696f6e189e4e2001280b321a2e647374" .
            "6f72652e76616c7565732e537472696e6756616c756512350a0f70726563" .
            "6973655f6e65745f73756d189f4e2001280b321b2e6473746f72652e7661" .
            "6c7565732e446563696d616c56616c756512340a0e706f736974696f6e5f" .
            "636f756e7418a04e2001280b321b2e6473746f72652e76616c7565732e49" .
            "6e746567657256616c756512340a0e6f726465725f73746174655f696418" .
            "a14e2001280b321b2e6473746f72652e76616c7565732e496e7465676572" .
            "56616c756512360a107368697070696e675f747970655f696418a24e2001" .
            "280b321b2e6473746f72652e76616c7565732e496e746567657256616c75" .
            "6512340a0e706572736f6e5f747970655f696418a34e2001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c756512360a106e" .
            "65745f7061796d656e745f636f737418a44e2001280b321b2e6473746f72" .
            "652e76616c7565732e446563696d616c56616c756512380a1264656c6976" .
            "6572795f706572736f6e5f696418a54e2001280b321b2e6473746f72652e" .
            "76616c7565732e496e746567657256616c7565123e0a197368697070696e" .
            "675f747970655f6465736372697074696f6e18a64e2001280b321a2e6473" .
            "746f72652e76616c7565732e537472696e6756616c7565122f0a0967726f" .
            "73735f73756d18a74e2001280b321b2e6473746f72652e76616c7565732e" .
            "446563696d616c56616c756512300a0b756e69745f73796d626f6c18a84e" .
            "2001280b321a2e6473746f72652e76616c7565732e537472696e6756616c" .
            "7565123e0a18707265636973655f6e65745f7061796d656e745f636f7374" .
            "18a94e2001280b321b2e6473746f72652e76616c7565732e446563696d61" .
            "6c56616c756512430a1e637573746f6d65725f6368617261637465726973" .
            "7469635f76616c75653218aa4e2001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512370a127075626c69635f64657363" .
            "72697074696f6e18ab4e2001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512310a0b63757272656e63795f696418ac4e" .
            "2001280b321b2e6473746f72652e76616c7565732e496e74656765725661" .
            "6c756512430a1e637573746f6d65725f6368617261637465726973746963" .
            "5f76616c75653118ad4e2001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512370a11707265636973655f67726f73735f" .
            "73756d18ae4e2001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c756512330a0d7368697070696e675f636f737418af4e20" .
            "01280b321b2e6473746f72652e76616c7565732e446563696d616c56616c" .
            "756512410a1c6368617261635f76616c315f72657374725f62795f706174" .
            "7465726e18b04e2001280b321a2e6473746f72652e76616c7565732e5374" .
            "72696e6756616c756512350a0f7061796d656e745f747970655f696418b1" .
            "4e2001280b321b2e6473746f72652e76616c7565732e496e746567657256" .
            "616c756512300a0b6f726465725f737461746518b24e2001280b321a2e64" .
            "73746f72652e76616c7565732e537472696e6756616c756512310a0b6465" .
            "736372697074696f6e18a49c012001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c7565123e0a17707265636973655f6e6574" .
            "5f636f6e74656e745f73756d18a59c012001280b321b2e6473746f72652e" .
            "76616c7565732e446563696d616c56616c756512360a106f726465725f63" .
            "6f6e74656e745f6e6f18a79c012001280b321a2e6473746f72652e76616c" .
            "7565732e537472696e6756616c756512370a106f726465725f636f6e7465" .
            "6e745f696418aa9c012001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c756512350a0f63757272656e63795f73796d626f" .
            "6c18ac9c012001280b321a2e6473746f72652e76616c7565732e53747269" .
            "6e6756616c756512380a116e6574746f5f636f6e74656e745f73756d18ae" .
            "9c012001280b321b2e6473746f72652e76616c7565732e446563696d616c" .
            "56616c7565123d0a166f726465725f636f6e74656e745f706f736974696f" .
            "6e18b19c012001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c756512360a0f6e65745f636f6e74656e745f73756d18b29c" .
            "012001280b321b2e6473746f72652e76616c7565732e446563696d616c56" .
            "616c7565122e0a076e6f64655f696418b39c012001280b321b2e6473746f" .
            "72652e76616c7565732e496e746567657256616c756512380a1167726f73" .
            "735f636f6e74656e745f73756d18b49c012001280b321b2e6473746f7265" .
            "2e76616c7565732e446563696d616c56616c7565123e0a17707265636973" .
            "655f67726f73735f6f726465725f73756d18b79c012001280b321b2e6473" .
            "746f72652e76616c7565732e446563696d616c56616c756512400a197072" .
            "65636973655f67726f73735f636f6e74656e745f73756d18b89c01200128" .
            "0b321b2e6473746f72652e76616c7565732e446563696d616c56616c7565" .
            "12360a0f67726f73735f6f726465725f73756d18b99c012001280b321b2e" .
            "6473746f72652e76616c7565732e446563696d616c56616c756512410a1a" .
            "6f726465725f636f6e74656e745f7761735f6d6f64696669656418bb9c01" .
            "2001280b321b2e6473746f72652e76616c7565732e426f6f6c65616e5661" .
            "6c756512330a0d6974656d5f70726f706572747918bc9c012001280b321a" .
            "2e6473746f72652e76616c7565732e537472696e6756616c7565122f0a08" .
            "7175616e7469747918bf9c012001280b321b2e6473746f72652e76616c75" .
            "65732e496e746567657256616c756512340a0d6e65745f6f726465725f73" .
            "756d18c29c012001280b321b2e6473746f72652e76616c7565732e446563" .
            "696d616c56616c756512390a1262727574746f5f636f6e74656e745f7375" .
            "6d18c69c012001280b321b2e6473746f72652e76616c7565732e44656369" .
            "6d616c56616c756512360a0f6e6574746f5f6f726465725f73756d18c79c" .
            "012001280b321b2e6473746f72652e76616c7565732e446563696d616c56" .
            "616c7565122d0a076974656d5f6e6f18c89c012001280b321a2e6473746f" .
            "72652e76616c7565732e537472696e6756616c7565123c0a157072656369" .
            "73655f6e65745f6f726465725f73756d18cc9c012001280b321b2e647374" .
            "6f72652e76616c7565732e446563696d616c56616c756512370a10627275" .
            "74746f5f6f726465725f73756d18ce9c012001280b321b2e6473746f7265" .
            "2e76616c7565732e446563696d616c56616c756542540a1b696f2e647374" .
            "6f72652e656e67696e652e70726f636564757265735a35676f73646b2e64" .
            "73746f72652e64652f656e67696e652f70726f636564757265732f6f6d5f" .
            "5365617263684f726465724e6f5f4164620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}

