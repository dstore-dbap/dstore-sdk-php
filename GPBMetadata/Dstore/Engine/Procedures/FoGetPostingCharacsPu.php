<?php
# Generated by the protocol buffer compiler.  DO NOT EDIT!
# source: dstore/engine/procedures/fo_GetPostingCharacs_Pu.proto

namespace GPBMetadata\Dstore\Engine\Procedures;

class FoGetPostingCharacsPu
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
            "0a990e0a366473746f72652f656e67696e652f70726f636564757265732f" .
            "666f5f476574506f7374696e67436861726163735f50752e70726f746f12" .
            "256473746f72652e656e67696e652e666f5f476574506f7374696e674368" .
            "61726163735f50751a136473746f72652f76616c7565732e70726f746f1a" .
            "1a6473746f72652f656e67696e652f656e67696e652e70726f746f22a204" .
            "0a0a506172616d657465727312400a1c706572736f6e5f6964656e746966" .
            "69636174696f6e5f76616c75657318012001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c7565122a0a21706572736f6e5f69" .
            "64656e74696669636174696f6e5f76616c7565735f6e756c6c18e9072001" .
            "280812330a0e706572736f6e5f747970655f696418022001280b321b2e64" .
            "73746f72652e76616c7565732e496e746567657256616c7565121c0a1370" .
            "6572736f6e5f747970655f69645f6e756c6c18ea0720012808122d0a0975" .
            "6e697175655f696418032001280b321a2e6473746f72652e76616c756573" .
            "2e537472696e6756616c756512170a0e756e697175655f69645f6e756c6c" .
            "18eb0720012808122d0a08666f72756d5f696418042001280b321b2e6473" .
            "746f72652e76616c7565732e496e746567657256616c756512160a0d666f" .
            "72756d5f69645f6e756c6c18ec0720012808123a0a166368617261637465" .
            "7269737469635f69645f6c69737418052001280b321a2e6473746f72652e" .
            "76616c7565732e537472696e6756616c756512240a1b6368617261637465" .
            "7269737469635f69645f6c6973745f6e756c6c18ed0720012808123b0a17" .
            "736570617261746f725f696e5f6964656e745f76616c7318062001280b32" .
            "1a2e6473746f72652e76616c7565732e537472696e6756616c756512250a" .
            "1c736570617261746f725f696e5f6964656e745f76616c735f6e756c6c18" .
            "ee072001280822ff070a08526573706f6e736512380a106d6574615f696e" .
            "666f726d6174696f6e18022003280b321e2e6473746f72652e656e67696e" .
            "652e4d657461496e666f726d6174696f6e12270a076d6573736167651803" .
            "2003280b32162e6473746f72652e656e67696e652e4d6573736167651240" .
            "0a03726f7718042003280b32332e6473746f72652e656e67696e652e666f" .
            "5f476574506f7374696e67436861726163735f50752e526573706f6e7365" .
            "2e526f771acd060a03526f77120f0a06726f775f696418904e2001280512" .
            "3f0a1a63686172616374657269737469635f6465736372697074696f6e18" .
            "914e2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c756512330a0d6669656c645f747970655f696418924e2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c7565123f0a" .
            "19706f7374696e675f63686172616374657269737469635f696418934e20" .
            "01280b321b2e6473746f72652e76616c7565732e496e746567657256616c" .
            "756512350a0f707265636973696f6e5f76616c756518944e2001280b321b" .
            "2e6473746f72652e76616c7565732e496e746567657256616c7565123b0a" .
            "15636f6d6d6f6e5f636861726163746572697374696318954e2001280b32" .
            "1b2e6473746f72652e76616c7565732e496e746567657256616c75651230" .
            "0a0a6d61785f6c656e67746818964e2001280b321b2e6473746f72652e76" .
            "616c7565732e496e746567657256616c756512370a11707265646566696e" .
            "65645f76616c75657318974e2001280b321b2e6473746f72652e76616c75" .
            "65732e426f6f6c65616e56616c7565123e0a18636865636b5f706f737469" .
            "6e675f7669736962696c69747918984e2001280b321b2e6473746f72652e" .
            "76616c7565732e426f6f6c65616e56616c7565122b0a06666f726d617418" .
            "994e2001280b321a2e6473746f72652e76616c7565732e537472696e6756" .
            "616c756512350a1062617369635f6669656c645f74797065189a4e200128" .
            "0b321a2e6473746f72652e76616c7565732e537472696e6756616c756512" .
            "3b0a166669656c645f747970655f6465736372697074696f6e189b4e2001" .
            "280b321a2e6473746f72652e76616c7565732e537472696e6756616c7565" .
            "12390a1362617369635f6669656c645f747970655f6964189c4e2001280b" .
            "321b2e6473746f72652e76616c7565732e496e746567657256616c756512" .
            "430a1d70726f70657274795f6d6f64696669636174696f6e5f616c6c6f77" .
            "6564189d4e2001280b321b2e6473746f72652e76616c7565732e496e7465" .
            "67657256616c7565123e0a186d61785f6e756d6265725f6f665f70726f70" .
            "657274696573189e4e2001280b321b2e6473746f72652e76616c7565732e" .
            "496e746567657256616c756542580a1b696f2e6473746f72652e656e6769" .
            "6e652e70726f636564757265735a39676f73646b2e6473746f72652e6465" .
            "2f656e67696e652f70726f636564757265732f666f5f476574506f737469" .
            "6e67436861726163735f5075620670726f746f33"
        ));

        static::$is_initialized = true;
    }
}
